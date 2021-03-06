<?php
// This class was automatically generated by build task
// You should not change it manually as it will be overwritten on next build
// @codingStandardsIgnoreFile


use \Codeception\Maybe;
use Codeception\Module\Filesystem;
use Codeception\Module\Cli;
use Codeception\Module\CliHelper;

/**
 * Inherited methods
 * @method void execute($callable)
 * @method void wantToTest($text)
 * @method void wantTo($text)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($role)
*/

class CliGuy extends \Codeception\AbstractGuy
{
    
    /**
     * Enters a directory In local filesystem.
     * Project root directory is used by default
     *
     * @param $path
     * @see Filesystem::amInPath()
     * @return \Codeception\Maybe
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     */
    public function amInPath($path) {
        $this->scenario->condition('amInPath', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * Opens a file and stores it's content.
     *
     * Usage:
     *
     * ``` php
     * <?php
     * $I->openFile('composer.json');
     * $I->seeInThisFile('codeception/codeception');
     * ?>
     * ```
     *
     * @param $filename
     * @see Filesystem::openFile()
     * @return \Codeception\Maybe
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     */
    public function openFile($filename) {
        $this->scenario->action('openFile', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * Deletes a file
     *
     * ``` php
     * <?php
     * $I->deleteFile('composer.lock');
     * ?>
     * ```
     *
     * @param $filename
     * @see Filesystem::deleteFile()
     * @return \Codeception\Maybe
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     */
    public function deleteFile($filename) {
        $this->scenario->action('deleteFile', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * Deletes directory with all subdirectories
     *
     * ``` php
     * <?php
     * $I->deleteDir('vendor');
     * ?>
     * ```
     *
     * @param $dirname
     * @see Filesystem::deleteDir()
     * @return \Codeception\Maybe
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     */
    public function deleteDir($dirname) {
        $this->scenario->action('deleteDir', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * Copies directory with all contents
     *
     * ``` php
     * <?php
     * $I->copyDir('vendor','old_vendor');
     * ?>
     * ```
     *
     * @param $src
     * @param $dst
     * @see Filesystem::copyDir()
     * @return \Codeception\Maybe
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     */
    public function copyDir($src, $dst) {
        $this->scenario->action('copyDir', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * Checks If opened file has `text` in it.
     *
     * Usage:
     *
     * ``` php
     * <?php
     * $I->openFile('composer.json');
     * $I->seeInThisFile('codeception/codeception');
     * ?>
     * ```
     *
     * @param $text
     * @see Filesystem::seeInThisFile()
     * @return \Codeception\Maybe
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     */
    public function seeInThisFile($text) {
        $this->scenario->assertion('seeInThisFile', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * Checks the strict matching of file contents.
     * Unlike `seeInThisFile` will fail if file has something more then expected lines.
     * Better to use with HEREDOC strings.
     * Matching is done after removing "\r" chars from file content.
     *
     * ``` php
     * <?php
     * $I->openFile('process.pid');
     * $I->seeFileContentsEqual('3192');
     * ?>
     * ```
     *
     * @param $text
     * @see Filesystem::seeFileContentsEqual()
     * @return \Codeception\Maybe
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     */
    public function seeFileContentsEqual($text) {
        $this->scenario->assertion('seeFileContentsEqual', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * Checks If opened file doesn't contain `text` in it
     *
     * ``` php
     * <?php
     * $I->openFile('composer.json');
     * $I->seeInThisFile('codeception/codeception');
     * ?>
     * ```
     *
     * @param $text
     * @see Filesystem::dontSeeInThisFile()
     * @return \Codeception\Maybe
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     */
    public function dontSeeInThisFile($text) {
        $this->scenario->action('dontSeeInThisFile', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * Deletes a file
     * @see Filesystem::deleteThisFile()
     * @return \Codeception\Maybe
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     */
    public function deleteThisFile() {
        $this->scenario->action('deleteThisFile', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * Checks if file exists in path.
     * Opens a file when it's exists
     *
     * ``` php
     * <?php
     * $I->seeFileFound('UserModel.php','app/models');
     * ?>
     * ```
     *
     * @param $filename
     * @param string $path
     * @see Filesystem::seeFileFound()
     * @return \Codeception\Maybe
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     */
    public function seeFileFound($filename, $path = null) {
        $this->scenario->assertion('seeFileFound', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * Erases directory contents
     *
     * ``` php
     * <?php
     * $I->cleanDir('logs');
     * ?>
     * ```
     *
     * @param $dirname
     * @see Filesystem::cleanDir()
     * @return \Codeception\Maybe
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     */
    public function cleanDir($dirname) {
        $this->scenario->action('cleanDir', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * Executes a shell command
     *
     * @param $command
     * @see Cli::runShellCommmand()
     * @return \Codeception\Maybe
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     */
    public function runShellCommmand($command) {
        $this->scenario->action('runShellCommmand', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * Checks that output from last executed command contains text
     *
     * @param $text
     * @see Cli::seeInShellOutput()
     * @return \Codeception\Maybe
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     */
    public function seeInShellOutput($text) {
        $this->scenario->assertion('seeInShellOutput', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * Checks that output from latest command doesn't contain text
     *
     * @param $text
     *
     * @see Cli::dontSeeInShellOutput()
     * @return \Codeception\Maybe
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     */
    public function dontSeeInShellOutput($text) {
        $this->scenario->action('dontSeeInShellOutput', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     *
     * @see CliHelper::executeCommand()
     * @return \Codeception\Maybe
     * ! This method is generated. DO NOT EDIT. !
     * ! Documentation taken from corresponding module !
     */
    public function executeCommand($command) {
        $this->scenario->action('executeCommand', func_get_args());
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }
}

