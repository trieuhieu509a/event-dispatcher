<?php
/**
 * follow: https://dev.to/fadymr/php-create-your-own-php-psr-14-event-dispatcher-200b
 */
use App\Listener\ListenerProvider;
use App\Event\PreCreateEvent;
use App\Listener\UserListener;
use App\Listener\EventDispatcher;
use App\Entity\User;

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/save-code-coverage.php';
$user  = new User();
$listenerProvider = (new ListenerProvider())
    ->addListener(PreCreateEvent::class, new UserListener());

$dispatcher = new EventDispatcher($listenerProvider);

// After flush user in database send event

$dispatcher = new EventDispatcher($listenerProvider);
$dispatcher->dispatch(new PreCreateEvent($user));