<?php

namespace GlobalPayments\Api\Entities\Enums;

use GlobalPayments\Api\Entities\Enum;

class StatusChangeReason extends Enum
{
    const ACTIVE = 'ACTIVE';
    const CLOSED_BY_MERCHANT = 'CLOSED_BY_MERCHANT';
    const CLOSED_BY_RISK = 'CLOSED_BY_RISK';
    const APPLICATION_DENIED = 'APPLICATION_DENIED';
    const PENDING_REVIEW = 'PENDING_REVIEW';
    const PENDING_MERCHANT_CONSENT = 'PENDING_MERCHANT_CONSENT';
    const PENDING_IDENTITY_VALIDATION = 'PENDING_IDENTITY_VALIDATION';
    const PENDING_IDENTITY_VALIDATION_AND_PAYMENT = 'PENDING_IDENTITY_VALIDATION_AND_PAYMENT';
    const PENDING_PAYMENT = 'PENDING_PAYMENT';
    const UNKNOWN_STATUS = 'UNKNOWN_STATUS';
    const REMOVE_PARTNERSHIP = 'REMOVE_PARTNERSHIP';
}