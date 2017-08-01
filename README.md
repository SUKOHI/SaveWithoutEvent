# SaveWithoutEvent
A Laravel package to prevent firing a specific event(s) of model when saving.


Installation
====

Execute composer command.

    composer require sukohi/save-without-event:1.*

Preparation
====

In your model, set `SaveWithoutEventTrait`.

    <?php
    
    namespace App;
    use Sukohi\SaveWithoutEvent\SaveWithoutEventTrait;
    
    class User {
    
        use SaveWithoutEventTrait;
        

That's all.
Now you can use `saveWithoutEvent` method.

## Usage

Use `saveWithoutEvent()` instead of `save()` like so.

    $user = new \App\User;
    // Something..
    $user->saveWithoutEvent('saved');

    // or with array

    $user->saveWithoutEvent(['saving', 'saved']);

* `saveWithoutEvent()` will return boolean result value as `save()` do.

License
====
This package is licensed under the MIT License.

Copyright 2017 Sukohi Kuhoh