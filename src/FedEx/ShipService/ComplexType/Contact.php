<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The descriptive data for a point-of-contact person.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class Contact
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'Contact';

    /**
     * Client provided identifier corresponding to this contact information.
     *
     * @param string $contactId
     * return Contact
     */
    public function setContactId($contactId)
    {
        $this->ContactId = $contactId;
        return $this;
    }
    
    /**
     * Identifies the contact person's name.
     *
     * @param string $personName
     * return Contact
     */
    public function setPersonName($personName)
    {
        $this->PersonName = $personName;
        return $this;
    }
    
    /**
     * Identifies the contact person's title.
     *
     * @param string $title
     * return Contact
     */
    public function setTitle($title)
    {
        $this->Title = $title;
        return $this;
    }
    
    /**
     * Identifies the company this contact is associated with.
     *
     * @param string $companyName
     * return Contact
     */
    public function setCompanyName($companyName)
    {
        $this->CompanyName = $companyName;
        return $this;
    }
    
    /**
     * Identifies the phone number associated with this contact.
     *
     * @param string $phoneNumber
     * return Contact
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->PhoneNumber = $phoneNumber;
        return $this;
    }
    
    /**
     * Identifies the phone extension associated with this contact.
     *
     * @param string $phoneExtension
     * return Contact
     */
    public function setPhoneExtension($phoneExtension)
    {
        $this->PhoneExtension = $phoneExtension;
        return $this;
    }
    
    /**
     * Identifies a toll free number, if any, associated with this contact.
     *
     * @param string $tollFreePhoneNumber
     * return Contact
     */
    public function setTollFreePhoneNumber($tollFreePhoneNumber)
    {
        $this->TollFreePhoneNumber = $tollFreePhoneNumber;
        return $this;
    }
    
    /**
     * Identifies the pager number associated with this contact.
     *
     * @param string $pagerNumber
     * return Contact
     */
    public function setPagerNumber($pagerNumber)
    {
        $this->PagerNumber = $pagerNumber;
        return $this;
    }
    
    /**
     * Identifies the fax number associated with this contact.
     *
     * @param string $faxNumber
     * return Contact
     */
    public function setFaxNumber($faxNumber)
    {
        $this->FaxNumber = $faxNumber;
        return $this;
    }
    
    /**
     * Identifies the email address associated with this contact.
     *
     * @param string $eMailAddress
     * return Contact
     */
    public function setEMailAddress($eMailAddress)
    {
        $this->EMailAddress = $eMailAddress;
        return $this;
    }
    

    
}