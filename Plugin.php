<?php namespace Gviabcua\WebSockets;

use Backend;
use System\Classes\PluginBase;

/**
 * WebSockets Plugin Information File
 */
class Plugin extends PluginBase
{
    public function register()
    {
        $this->registerConsoleCommand('websockets.run', 'Gviabcua\WebSockets\Console\RunCommand');
    }

    public function pluginDetails()
    {
        return [
            'name'        => 'WebSockets',
            'description' => 'Provides some WebSockets features.',
            'author'      => 'Gviabcua',
            'icon'        => 'icon-leaf'
        ];
    }

    public function registerComponents()
    {
        return [
            'Gviabcua\WebSockets\Components\WebSocket' => 'websocket',
        ];
    }
}
