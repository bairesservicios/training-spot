<?php

/**
 * BaseCoach
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property Doctrine_Collection $Classes
 * @property Doctrine_Collection $ClassesPerCoach
 * 
 * @method Doctrine_Collection getClasses()         Returns the current record's "Classes" collection
 * @method Doctrine_Collection getClassesPerCoach() Returns the current record's "ClassesPerCoach" collection
 * @method Coach               setClasses()         Sets the current record's "Classes" collection
 * @method Coach               setClassesPerCoach() Sets the current record's "ClassesPerCoach" collection
 * 
 * @package    sf_sandbox
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseCoach extends AbstractPerson
{
    public function setTableDefinition()
    {
        parent::setTableDefinition();
        $this->setTableName('coach');

        $this->setAttribute(Doctrine_Core::ATTR_EXPORT, Doctrine_Core::EXPORT_ALL);
        $this->setAttribute(Doctrine_Core::ATTR_VALIDATE, true);
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('AbstractClass as Classes', array(
             'refClass' => 'ClassPerCoach',
             'local' => 'coach_id',
             'foreign' => 'abstract_class_id'));

        $this->hasMany('ClassPerCoach as ClassesPerCoach', array(
             'local' => 'id',
             'foreign' => 'coach_id'));
    }
}