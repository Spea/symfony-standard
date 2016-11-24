<?php

namespace AppBundle\Model;

use JMS\Serializer\Annotation as Serializer;
use Symfony\Component\Validator\Constraints as Assert;

class Address
{
    /**
     * @Assert\NotBlank()
     * @Assert\Length(max = 35)
     * @Serializer\Type("string")
     *
     * @var string
     */
    public $firstName;

    /**
     * @Assert\NotBlank()
     * @Assert\Length(max = 35)
     * @Serializer\Type("string")
     *
     * @var string
     */
    public $lastName;

    /**
     * @Assert\NotBlank()
     * @Assert\Length(max = 50)
     * @Serializer\Type("string")
     *
     * @var string
     */
    public $street;

    /**
     * @Assert\NotBlank()
     * @Serializer\Type("string")
     *
     * @var string
     */
    public $streetNumber;

    /**
     * @Serializer\Type("string")
     * @Assert\Length(max = 50)
     *
     * @var string
     */
    public $optional;

    /**
     * @Assert\NotBlank()
     * @Serializer\Type("string")
     *
     * @var string
     */
    public $zip;

    /**
     * @Assert\NotBlank()
     * @Assert\Length(max = 50)
     * @Serializer\Type("string")
     *
     * @var string
     */
    public $city;
}
