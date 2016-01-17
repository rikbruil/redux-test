<?php

/*
 * This file is part of the Rephlux library.
 * (c) Rik Bruil <rikbruil@users.noreply.github.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Rb\Rephlux\Dispatcher;

abstract class AbstractDispatcher implements DispatcherInterface
{
    /**
     * @var callable
     */
    private $dispatcher;

    /**
     * @param callable $dispatcher
     *
     * @return $this
     */
    public function setCurrentDispatcher(callable $dispatcher)
    {
        $this->dispatcher = $dispatcher;

        return $this;
    }

    /**
     * @return callable
     */
    public function getCurrentDispatcher()
    {
        return $this->dispatcher;
    }

    /**
     * @param array $action
     *
     * @return array
     */
    public function __invoke($action)
    {
        return $this->dispatch($action);
    }
}
