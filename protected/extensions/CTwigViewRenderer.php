<?php
/**
 * Twig renderer for Yii
 *
 * @author Alexander Makarov <sam@rmcreative.ru>
 * @link http://code.google.com/p/yiiext/
 * @link http://www.twig-project.org/
 *
 * @version 0.9.1
 */
class CTwigViewRenderer extends CApplicationComponent implements IViewRenderer {
    public $fileExtension='.html';

    private $twig;

    /**
     * Component initialization
     */
    function init(){
        Yii::import('application.vendors.*');

        // need this since Yii autoload handler raises an error if class is not found
        spl_autoload_unregister(array('YiiBase','autoload'));

        // registering twig autoload handler
        require_once 'Twig/Autoloader.php';
        Twig_Autoloader::register();

        // adding back Yii autoload handler
        spl_autoload_register(array('YiiBase','autoload'));

        // setting cache path to application runtime directory
        $cache_path = Yii::app()->getRuntimePath().DIRECTORY_SEPARATOR.'views_twig'.DIRECTORY_SEPARATOR;
        // here we are using twig loader
        $loader = new Twig_Loader_Filesystem(Yii::app()->getBasePath());
        $this->twig = new Twig_Environment($loader, array('cache'=>$cache_path, 'auto_reload'=>true));
    }

    /**
	 * Renders a view file.
	 * This method is required by {@link IViewRenderer}.
	 * @param CBaseController the controller or widget who is rendering the view file.
	 * @param string the view file path
	 * @param mixed the data to be passed to the view
	 * @param boolean whether the rendering result should be returned
	 * @return mixed the rendering result, or null if the rendering result is not needed.
	 */
	public function renderFile($context,$sourceFile,$data,$return) {
        // current controller properties will be accessible as {{this.property}}
        $data['this'] = $context;
		$data['Yii'] = new YiiStatic();
		$data['app'] =& Yii::app();
		$data['C'] = new twigC();

        // check if view file exists
        if(!is_file($sourceFile) || ($file=realpath($sourceFile))===false)
            throw new CException(Yii::t('yii','View file "{file}" does not exist.', array('{file}'=>$sourceFile)));

		$viewFile = substr($sourceFile, strlen(Yii::app()->getBasePath()));
        
        $cachedFile = $this->twig->getCacheFilename($viewFile);
        
        //remove file if Source is newer than viewFile and Cache is enabled
        if(@filemtime($sourceFile)>@filemtime($cachedFile) && $this->twig->getCache() !== false)
        {
                @unlink($cachedFile);
        }

        $template = $this->twig->loadTemplate($viewFile);
        if($return)
                return $template->render($data);
        else
                echo $template->render($data);
	}
}
class YiiStatic {
	function __get($method) {
		return call_user_func(array('Yii', $method));
	}
	function __call($method, $args = array()) {
		return call_user_func_array(array('Yii', $method), $args);
	}
}
class twigC {
	private $_objects = array();
	function __isset($name) {
		return true;
	}
	function __get($method) {
		if( ! isset($this->_objects[$method])) {
			$this->_objects[$method] = new twigCObj($method);
		}
		return $this->_objects[$method];
	}
}

class twigCObj {
	private $_name;
	function __construct($name) {
		$name = 'C'.$name;
		$this->_name = new $name();
	}
	function __get($method) {
		return call_user_func(array($this->_name, $method));
	}
	function __call($method, $args = array()) {
		return call_user_func_array(array($this->_name, $method), $args);
	}
}
