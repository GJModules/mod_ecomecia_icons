<?php

    use Joomla\CMS\Factory;
    use Joomla\CMS\Helper\ModuleHelper;
    use Joomla\CMS\Filesystem\File;
    use Joomla\CMS\Layout\LayoutHelper;
    use Joomla\CMS\MVC\View\HtmlView;
    use Joomla\CMS\Table\Table;
    use Joomla\CMS\Uri\Uri;
    use Joomla\Registry\Registry;

    defined('_JEXEC') or die('Restricted access');
    if (!defined('DS')) define('DS', DIRECTORY_SEPARATOR);

    require_once(JPATH_SITE . DS . 'components' . DS . 'com_jshopping' . DS . "lib" . DS . "factory.php");
    require_once(JPATH_SITE . DS . 'components' . DS . 'com_jshopping' . DS . "lib" . DS . "functions.php");

    class ModEcommerceIconsHelper
    {
        /**
         * @var \Joomla\CMS\Application\CMSApplication|null
         * @since 3.9
         */
        public $app;
        /**
         * @var \JDatabaseDriver|null
         * @since 3.9
         */
        private $db;
        public static $instance;

        private $params ;

        public static $viewConfig = [
            'name' => 'category' ,
            'charset' => 'UTF-8' ,
            'template_plath' => null ,
        ];


        /**
         * helper constructor.
         *
         * @param array $options
         *
         * @throws Exception
         * @since 3.9
         */
        private function __construct( $options = array() )
        {
            $this->params = $options ;
            $this->app = Factory::getApplication();
//            $this->db = Factory::getDbo();



            $this->jshopConfig = JSFactory::getConfig();
            $this->jshopConfig->cur_lang = $this->jshopConfig->frontend_lang;

            return $this;
        }#END FN

        /**
         * @param array $options
         *
         * @return ModJshoppingRandomMHelper
         * @throws Exception
         * @since 3.9
         */
        public static function instance( $options = array() )
        {
            if ( self::$instance === null ){
                self::$instance = new self($options);
            }
            return self::$instance;
        }#END FN

    }











