<!DOCTYPE html>
<html>
<head>
    <title>Redirecting to eSewa...</title>
</head>
<body onload="document.getElementById('esewaForm').submit();">
    <p>Redirecting to eSewa. Please wait...</p>
    <form id="esewaForm" action="https://rc-epay.esewa.com.np/api/epay/main/v2/form" method="POST">
        <input type="hidden" name="amount" value="{{ $totalAmount }}">
        <input type="hidden" name="tax_amount" value="0">
        <input type="hidden" name="total_amount" value="{{ $totalAmount }}">
        <input type="hidden" name="transaction_uuid" value="{{ $transaction_uuid }}">
        <input type="hidden" name="product_code" value="{{ $product_code }}">
        <input type="hidden" name="product_service_charge" value="0">
        <input type="hidden" name="product_delivery_charge" value="0">
        <input type="hidden" name="success_url" value="{{ route('esewa.success') }}">
        <input type="hidden" name="failure_url" value="{{ route('esewa.failure') }}">
        <input type="hidden" name="signed_field_names" value="total_amount,transaction_uuid,product_code">
        <input type="hidden" name="signature" value="{{ $signature }}">
    </form>
</body>
</html>
