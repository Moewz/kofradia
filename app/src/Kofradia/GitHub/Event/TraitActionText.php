<?php namespace Kofradia\GitHub\Event;

trait TraitActionText {
	/**
	 * Description of actions
	 *
	 * @var array(string action => string text, ..)
	 */
	public static $action_text;

	/**
	 * Name of action
	 *
	 * @var string
	 */
	public $action;

	/**
	 * Get description of action
	 *
	 * @return string
	 */
	public function getActionText()
	{
		if (isset(static::$action_text[$this->action]))
		{
			return static::$action_text[$this->action];
		}

		return $this->action;
	}
}