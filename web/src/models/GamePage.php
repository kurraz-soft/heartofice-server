<?php

namespace app\models;


use Phalcon\Events\EventsAwareInterface;
use Phalcon\Events\Manager as EventsManager;
use Phalcon\Events\ManagerInterface;
use Phalcon\Http\Response\Exception;

class GamePage implements EventsAwareInterface
{
    /**
     * @var string
     */
    public $body = '';
    /**
     * @var array
     */
    public $answers = [];

    /**
     * @var array
     */
    public $answerWays = [];

    /**
     * @var Character
     */
    public $character;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $scenario = '';

    public $params = [];

    /**
     * @var ManagerInterface
     */
    private $_eventsManager;

    public function __construct($page_name, Character $character)
    {
        $this->name = $page_name;
        $this->character = $character;
        $this->_eventsManager = new EventsManager();
    }

    public function setEventsManager(ManagerInterface $eventsManager)
    {
        $this->_eventsManager = $eventsManager;
    }

    public function getEventsManager()
    {
        return $this->_eventsManager;
    }

    public function toArray()
    {
        return [
            'body' => $this->body,
            'answers' => $this->answers,
            'character' => $this->character->toArray(),
            'page' => $this->name,
            'scenario' => $this->scenario,
            'params' => $this->params,
        ];
    }

    public function addAnswer($text, $next_page, callable $beforeNextPage = null)
    {
        $this->answers[] = $text;
        $this->answerWays[] = $next_page;

        if($beforeNextPage)
        {
            $this->getEventsManager()->attach('GamePage:beforeNextPage:answer-'.(count($this->answers)-1),$beforeNextPage);
        }
    }

    public function setScenario($name)
    {
        $this->scenario = $name;
    }

    public function runAndGetNextPage($answer)
    {
        /*if($this->name == 'start')
        {
            return new GamePage('prologue',$this->character);
        }else*/
        {
            $this->run();
            $this->_eventsManager->fire('GamePage:beforeNextPage:answer-'.$answer, $this);
            $this->_eventsManager->fire('GamePage:beforeNextPage', $this, $answer);
            return new GamePage($this->answerWays[$answer],$this->character);
        }
    }

    public function attachCalculations(callable $callable)
    {
        $this->getEventsManager()->attach('GamePage:calculations', $callable);
    }

    public function attachDynamicAnswers(callable $callable)
    {
        $this->getEventsManager()->attach('GamePage:calcDynamicAnswers', $callable);
    }

    public function compile()
    {
        $page_name = __DIR__ . '/../pages/' . $this->name . '.php';

        if(!file_exists($page_name)) throw new Exception("Page not found");

        $this->getEventsManager()->detachAll();

        $this->answers = [];
        $this->answerWays = [];

        ob_start();
        require ($page_name);
        $this->body = ob_get_clean();
    }

    public function run()
    {
        $this->compile();
        $this->_eventsManager->fire('GamePage:calculations', $this);
        $this->_eventsManager->fire('GamePage:calcDynamicAnswers', $this);
    }

    public function compileWithAnswers()
    {
        $this->compile();
        $this->_eventsManager->fire('GamePage:calcDynamicAnswers', $this);
    }
}