<?php
/**
 * First Data Payeezy Response
 */

namespace Omnipay\FirstData\Message;

use Omnipay\Common\Message\AbstractResponse;
use Omnipay\Common\Message\RequestInterface;

/**
 * First Data Payeezy Response
 *
 * ### Quirks
 *
 * This gateway requires both a transaction reference (aka an authorization number)
 * and a transaction tag to implement either voids or refunds.  These are referred
 * to in the documentation as "tagged refund" and "tagged voids".
 *
 * The transaction reference returned by this class' getTransactionReference is a
 * concatenated value of the authorization number and the transaction tag.
 */
class PayeezyResponse extends AbstractResponse
{
    public function __construct(RequestInterface $request, $data)
    {
        $this->request = $request;
        parse_str($data, $this->data);
    }

    public function isSuccessful()
    {
        return ($this->data['transaction_approved'] == '1') ? true : false;
    }

    /**
     * Get an item from the internal data array
     *
     * This is a short cut function to ensure that we test that the item
     * exists in the data array before we try to retrieve it.
     *
     * @param $itemname
     * @return mixed|null
     */
    public function getDataItem($itemname)
    {
        if (isset($this->data[$itemname])) {
            return $this->data[$itemname];
        }

        return null;
    }

    /**
     * Get the authorization number
     *
     * This is the authorization number returned by the cardholder’s financial
     * institution when a transaction has been approved. This value overrides any
     * value sent for the Request Property of the same name.
     *
     * @return integer
     */
    public function getAuthorizationNumber()
    {
        return $this->getDataItem('authorization_num');
    }

    /**
     * Get the transaction tag.
     *
     * A unique identifier to associate with a tagged transaction. This value overrides
     * any value sent for the Request Property of the same name.
     *
     * @return string
     */
    public function getTransactionTag()
    {
        return $this->getDataItem('transaction_tag');
    }

    /**
     * Get the transaction reference
     *
     * Because refunding or voiding a transaction requires both the authorization number
     * and the transaction tag, we concatenate them together to make the transaction
     * reference.
     *
     * @return string
     */
    public function getTransactionReference()
    {
        return $this->getAuthorizationNumber() . '::' . $this->getTransactionTag();
    }

    /**
     * Get the transaction sequence number.
     *
     * A digit sequentially incremented number generated by Global Gateway e4 and passed
     * through to the financial institution. It is also passed back to the client in the
     * transaction response. This number can be used for tracking and audit purposes.
     *
     * @return string
     */
    public function getSequenceNo()
    {
        return $this->getDataItem('sequence_no');
    }

    /**
     * Get the credit card reference for a completed transaction.
     *
     * This is only provided if TransArmor processing is turned on for the gateway.
     *
     * @return string
     */
    public function getCardReference()
    {
        return $this->getDataItem('transarmor_token');
    }

    public function getMessage()
    {
        return $this->getDataItem('exact_message');
    }

    /**
     * Get the error code.
     *
     * This property indicates the processing status of the transaction. Please refer
     * to the section on Exception Handling for further information. The Transaction_Error
     * property will return True if this property is not “00”.
     *
     * @return string
     */
    public function getCode()
    {
        return $this->getDataItem('exact_resp_code');
    }
}
