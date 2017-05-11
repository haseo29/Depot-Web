<?php

namespace Librinfo\SonataSyliusUserBundle\Command\Test\Unit;

use Librinfo\SonataSyliusUserBundle\Command\CreateUserCommand;
/**Librinfo\SonataSyliusUserBundle\Command\CreateUserCommand'
 * Generated by PHPUnit_SkeletonGenerator on 2017-05-02 at 16:34:40.
 */
use PHPUnit\Framework\TestCase;

class CreateUserCommandTest extends TestCase {

    /**
     * @var CreateUserCommand
     */
    protected $myCommand;

    protected $myConfig;


    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        

        $this->myCommand= new CreateUserCommand();                                                   
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        
    }

    /**
     * @covers Librinfo\SonataSyliusUserBundle\Command\CreateUserCommand::configure
     * @todo   Implement testConfigure().
     */
    public function testConfigure() {
        
        $this->myCommand->configure();
        

        
        $this->myConfig = $this->myCommand->getName();
        /*
         * @todo : check if we need to test more (or not)
         */
        $this->assertContains('user', $this->myConfig);                                        
    }
    
    
   /* $this
            ->setName('librinfo:user:create')
            ->setDescription('Create a Sonata admin user.')
            ->setHelp(<<<EOT
The <info>%command.name%</info> command allows to create a user.
EOT
            )
    */
    
    public function testExecute() {
        
      /*
       * @todo : Is it really relevant to perform tests on it?
       */ 
    }
    
    

}

                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                