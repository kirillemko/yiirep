<?
namespace app\components;


use Yii;
use yii\base\Component;
use yii\base\InvalidConfigException;

class MyComponent extends Component
{
    public $fff = 'Hello..Welcome to MyComponent';

    public function welcome()
    {
        echo $this->fff;
    }

}