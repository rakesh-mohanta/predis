<?php

namespace Predis\Commands;

class SubscribeByPattern extends Command {
    public function canBeHashed()  { return false; }
    public function getId() { return 'PSUBSCRIBE'; }
    public function filterArguments(Array $arguments) {
        return Utils::filterArrayArguments($arguments);
    }
}
