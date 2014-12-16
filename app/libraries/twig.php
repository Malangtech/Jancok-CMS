<?php if (!defined('BASEPATH')) {exit('No direct script access allowed');}

	class Twig {
		private $CI;
		private $_twig;
		private $_template_dir;
		private $_cache_dir;

		function __construct($debug = false) {
			$this->CI =& get_instance();
			$this->CI->config->load('twig');
			
			ini_set('include_path',
			ini_get('include_path') . PATH_SEPARATOR . APPPATH . 'libraries/Twig');
			require_once (string) "Autoloader" . EXT;

			log_message('debug', "Twig Initialized");

			Twig_Autoloader::register();

			//-------
			$t_D = [];

			if($this->CI->router->fetch_module() !== null) {
				array_push($t_D, APPPATH.'modules/'.$this->CI->router->fetch_module().'/views');
			}

			$t_D = array_merge($t_D, $this->CI->config->item('t_D'));
			$this->_t_D = $t_D;
			//-------

			$this->_cache_dir = $this->CI->config->item('cache_dir');

			$loader = new Twig_Loader_Filesystem($this->_template_dir);

			$this->_twig = new Twig_Environment($loader, array(
					'cache' => $this->_cache_dir,
					'debug' => $debug,
			));
			
			foreach(get_defined_functions() as $functions) {
					foreach($functions as $function) {
						$this->_twig->addFunction($function, new Twig_Function_Function($function));
					}
			}
		}

		public function add_function($name) {
			$this->_twig->addFunction($name, new Twig_Function_Function($name));
		}

		public function render($template, $data=[]) {
			$template = $this->_twig->loadTemplate($template);
			return $template->render($data);
		}

		public function display($template, $data=[]) {
			$template = $this->_twig->loadTemplate($template);
			/* elapsed_time and memory_usage */
			$data['elapsed_time'] = $this->CI->benchmark->elapsed_time('total_execution_time_start', 'total_execution_time_end');
			$memory = (!function_exists('memory_get_usage')) ? '0' : round(memory_get_usage()/1024/1024, 2) . 'MB';
			$data['memory_usage'] = $memory;
			$template->display($data);
		}

		public function set_variable($name, $value) {
			$this->_twig->addGlobal($name, $value);
		}
	}

