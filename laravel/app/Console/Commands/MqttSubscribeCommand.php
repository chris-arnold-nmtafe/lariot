<?php

namespace App\Console\Commands;

use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;
use PhpMqtt\Client\Facades\MQTT;

#[Signature('app:mqtt-subscribe-command')]
#[Description('Command description')]
class MqttSubscribeCommand extends Command
{
    protected $signature = 'mqtt:subscribe';
    protected $description = 'Subscribe to MQTT topics and listen';
    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Connecting to MQTT broker...');
        $mqtt = MQTT::connection();
        $topic = 'sensors/#';
        $mqtt->subscribe($topic,function() {
            $this->info("Message!");
        });
        $this->info("Subscribed!");
        $mqtt->loop(true);
    }
}
