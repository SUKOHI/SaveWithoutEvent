<?php

namespace Sukohi\SaveWithoutEvent;

trait SaveWithoutEventTrait {

    private $_ignoring_events = [];

    public function saveWithoutEvent($events) {

        if(!is_array($events)) {

            $events = [$events];

        }

        $this->_ignoring_events = $events;
        $result = $this->save();
        $this->_ignoring_events = [];
        return $result;

    }

    // Override
    protected function fireModelEvent($event, $halt = true) {
        if (!in_array($event, $this->_ignoring_events)) {
            return parent::fireModelEvent($event, $halt);
        }
    }

}