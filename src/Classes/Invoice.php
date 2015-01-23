<?php

class Invoice extends Record {
	public $createdDate;
	public $lastModifiedDate;
	public $customForm;
	public $nextApprover;
	public $entity;
	public $tranDate;
	public $tranId;
	public $source;
	public $createdFrom;
	public $postingPeriod;
	public $opportunity;
	public $department;
	public $class;
	public $terms;
	public $location;
	public $subsidiary;
	public $currency;
	public $dueDate;
	public $discountDate;
	public $discountAmount;
	public $salesRep;
	public $contribPct;
	public $partner;
	public $leadSource;
	public $startDate;
	public $endDate;
	public $otherRefNum;
	public $memo;
	public $salesEffectiveDate;
	public $excludeCommission;
	public $totalCostEstimate;
	public $estGrossProfit;
	public $estGrossProfitPercent;
	public $revRecSchedule;
	public $revRecStartDate;
	public $revRecEndDate;
	public $amountPaid;
	public $amountRemaining;
	public $balance;
	public $account;
	public $onCreditHold;
	public $exchangeRate;
	public $currencyName;
	public $promoCode;
	public $discountItem;
	public $discountRate;
	public $isTaxable;
	public $taxItem;
	public $taxRate;
	public $toBePrinted;
	public $toBeEmailed;
	public $toBeFaxed;
	public $fax;
	public $messageSel;
	public $message;
	public $billingAddress;
	public $billAddressList;
	public $shippingAddress;
	public $shipIsResidential;
	public $shipAddressList;
	public $fob;
	public $shipDate;
	public $shipMethod;
	public $shippingCost;
	public $shippingTax1Rate;
	public $shippingTax2Rate;
	public $shippingTaxCode;
	public $handlingTaxCode;
	public $handlingTax1Rate;
	public $handlingCost;
	public $handlingTax2Rate;
	public $trackingNumbers;
	public $linkedTrackingNumbers;
	public $salesGroup;
	public $subTotal;
	public $revenueStatus;
	public $recognizedRevenue;
	public $deferredRevenue;
	public $revRecOnRevCommitment;
	public $syncSalesTeams;
	public $discountTotal;
	public $taxTotal;
	public $altShippingCost;
	public $altHandlingCost;
	public $total;
	public $status;
	public $job;
	public $billingSchedule;
	public $email;
	public $tax2Total;
	public $vatRegNum;
	public $expCostDiscount;
	public $itemCostDiscount;
	public $timeDiscount;
	public $expCostDiscRate;
	public $itemCostDiscRate;
	public $timeDiscRate;
	public $expCostDiscAmount;
	public $expCostTaxRate1;
	public $expCostTaxRate2;
	public $itemCostDiscAmount;
	public $expCostTaxCode;
	public $expCostDiscTax1Amt;
	public $itemCostTaxRate1;
	public $timeDiscAmount;
	public $itemCostTaxCode;
	public $expCostDiscTaxable;
	public $itemCostDiscTaxable;
	public $itemCostTaxRate2;
	public $itemCostDiscTax1Amt;
	public $itemCostDiscPrint;
	public $timeDiscTaxable;
	public $timeTaxRate1;
	public $expCostDiscPrint;
	public $timeTaxCode;
	public $timeDiscPrint;
	public $giftCertApplied;
	public $timeDiscTax1Amt;
	public $tranIsVsoeBundle;
	public $timeTaxRate2;
	public $vsoeAutoCalc;
	public $syncPartnerTeams;
	public $salesTeamList;
	public $partnersList;
	public $itemList;
	public $itemCostList;
	public $giftCertRedemptionList;
	public $expCostList;
	public $timeList;
	public $shipGroupList;
	public $approvalStatus;
	public $customFieldList;
	public $internalId;
	public $externalId;
	static $paramtypesmap = array(
		"createdDate" => "dateTime",
		"lastModifiedDate" => "dateTime",
		"customForm" => "RecordRef",
		"nextApprover" => "RecordRef",
		"entity" => "RecordRef",
		"tranDate" => "dateTime",
		"tranId" => "string",
		"source" => "string",
		"createdFrom" => "RecordRef",
		"postingPeriod" => "RecordRef",
		"opportunity" => "RecordRef",
		"department" => "RecordRef",
		"class" => "RecordRef",
		"terms" => "RecordRef",
		"location" => "RecordRef",
		"subsidiary" => "RecordRef",
		"currency" => "RecordRef",
		"dueDate" => "dateTime",
		"discountDate" => "dateTime",
		"discountAmount" => "float",
		"salesRep" => "RecordRef",
		"contribPct" => "string",
		"partner" => "RecordRef",
		"leadSource" => "RecordRef",
		"startDate" => "dateTime",
		"endDate" => "dateTime",
		"otherRefNum" => "string",
		"memo" => "string",
		"salesEffectiveDate" => "dateTime",
		"excludeCommission" => "boolean",
		"totalCostEstimate" => "float",
		"estGrossProfit" => "float",
		"estGrossProfitPercent" => "float",
		"revRecSchedule" => "RecordRef",
		"revRecStartDate" => "dateTime",
		"revRecEndDate" => "dateTime",
		"amountPaid" => "float",
		"amountRemaining" => "float",
		"balance" => "float",
		"account" => "RecordRef",
		"onCreditHold" => "string",
		"exchangeRate" => "float",
		"currencyName" => "string",
		"promoCode" => "RecordRef",
		"discountItem" => "RecordRef",
		"discountRate" => "string",
		"isTaxable" => "boolean",
		"taxItem" => "RecordRef",
		"taxRate" => "float",
		"toBePrinted" => "boolean",
		"toBeEmailed" => "boolean",
		"toBeFaxed" => "boolean",
		"fax" => "string",
		"messageSel" => "RecordRef",
		"message" => "string",
		"billingAddress" => "Address",
		"billAddressList" => "RecordRef",
		"shippingAddress" => "Address",
		"shipIsResidential" => "boolean",
		"shipAddressList" => "RecordRef",
		"fob" => "string",
		"shipDate" => "dateTime",
		"shipMethod" => "RecordRef",
		"shippingCost" => "float",
		"shippingTax1Rate" => "float",
		"shippingTax2Rate" => "string",
		"shippingTaxCode" => "RecordRef",
		"handlingTaxCode" => "RecordRef",
		"handlingTax1Rate" => "float",
		"handlingCost" => "float",
		"handlingTax2Rate" => "string",
		"trackingNumbers" => "string",
		"linkedTrackingNumbers" => "string",
		"salesGroup" => "RecordRef",
		"subTotal" => "float",
		"revenueStatus" => "RevenueStatus",
		"recognizedRevenue" => "float",
		"deferredRevenue" => "float",
		"revRecOnRevCommitment" => "boolean",
		"syncSalesTeams" => "boolean",
		"discountTotal" => "float",
		"taxTotal" => "float",
		"altShippingCost" => "float",
		"altHandlingCost" => "float",
		"total" => "float",
		"status" => "string",
		"job" => "RecordRef",
		"billingSchedule" => "RecordRef",
		"email" => "string",
		"tax2Total" => "float",
		"vatRegNum" => "string",
		"expCostDiscount" => "RecordRef",
		"itemCostDiscount" => "RecordRef",
		"timeDiscount" => "RecordRef",
		"expCostDiscRate" => "string",
		"itemCostDiscRate" => "string",
		"timeDiscRate" => "string",
		"expCostDiscAmount" => "float",
		"expCostTaxRate1" => "float",
		"expCostTaxRate2" => "float",
		"itemCostDiscAmount" => "float",
		"expCostTaxCode" => "RecordRef",
		"expCostDiscTax1Amt" => "float",
		"itemCostTaxRate1" => "float",
		"timeDiscAmount" => "float",
		"itemCostTaxCode" => "RecordRef",
		"expCostDiscTaxable" => "boolean",
		"itemCostDiscTaxable" => "boolean",
		"itemCostTaxRate2" => "float",
		"itemCostDiscTax1Amt" => "float",
		"itemCostDiscPrint" => "boolean",
		"timeDiscTaxable" => "boolean",
		"timeTaxRate1" => "float",
		"expCostDiscPrint" => "boolean",
		"timeTaxCode" => "RecordRef",
		"timeDiscPrint" => "boolean",
		"giftCertApplied" => "float",
		"timeDiscTax1Amt" => "float",
		"tranIsVsoeBundle" => "boolean",
		"timeTaxRate2" => "float",
		"vsoeAutoCalc" => "boolean",
		"syncPartnerTeams" => "boolean",
		"salesTeamList" => "InvoiceSalesTeamList",
		"partnersList" => "InvoicePartnersList",
		"itemList" => "InvoiceItemList",
		"itemCostList" => "InvoiceItemCostList",
		"giftCertRedemptionList" => "GiftCertRedemptionList",
		"expCostList" => "InvoiceExpCostList",
		"timeList" => "InvoiceTimeList",
		"shipGroupList" => "InvoiceShipGroupList",
		"approvalStatus" => "RecordRef",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
}
