<?php echo form_open('admin/sendmail');?>

<?php
if(isset($TentetiveDate))
{
  $buildmessage='Dear Reader(s)';
  $buildmessage.='&#13;&#10;';
  $buildmessage.='&#13;&#10;';
  $buildmessage.='Biva Publication delightfully confirms your order. Your order no is - #ORDBPH'.$OrderId;
  $buildmessage.='&#13;&#10;';
  $buildmessage.='Expected date of delivery of your order is on or before '.$TentetiveDate;
  $buildmessage.='&#13;&#10;';
  $buildmessage.='Please drop a mail at contact@bivapublication.com for any assistance or enquiry.';
  $buildmessage.='&#13;&#10;';
  $buildmessage.='&#13;&#10;';
  $buildmessage.='Thanks & Regards,';
  $buildmessage.='&#13;&#10;';
  $buildmessage.='BP Team';
  $buildmessage.='&#13;&#10;';
  $buildmessage.='Kolkata';
  $buildmessage.='&#13;&#10;';
  $buildmessage.='+91 9434343446';
  $buildmessage.='&#13;&#10;';
  $buildmessage.='"Imagination! Xperience ours, Xplore yours"';
}
else{

  $url="";
  //Get Shipment COURUER
  switch ($CourierName) {
    case "Aramex":
      $url="https://www.aramex.com/track/shipments/";
      break;

    case "DTDC":
      $url="http://www.dtdc.in/tracking/shipment-tracking.asp";
      break;

    case "Shree Maruti Courier":
      $url="http://www.shreemaruticourier.com/";
      break;

    case "Indian Post":
        $url="https://www.indiapost.gov.in/VAS/Pages/trackconsignment.aspx/";
        break;

    case "Trackon Courier":
        $url="http://trackoncourier.com/";
        break;

    case "Trackon Courier":
        $url="http://www.tpcindia.com/multiple-tracking.aspx";
        break;

    case "Biva Publication Self":
        $url="http://bivapublication.com/";
        break;

    default:
      $url="";
      break;
  }

  $buildmessage='Dear Reader(s)';
  $buildmessage.='&#13;&#10;';
  $buildmessage.='&#13;&#10;';
  $buildmessage.='Your order #ORDBPH'.$OrderId.' has been despatched from Biva Publication end. Your order is in transit state.';
  $buildmessage.='Please see below for the Shipping details:';
  $buildmessage.='&#13;&#10;';
  $buildmessage.='Courier Agency : '.$CourierName;
  $buildmessage.='&#13;&#10;';
  $buildmessage.='Tracking ID: '. $TrackingId;
  $buildmessage.='&#13;&#10;';
  $buildmessage.='Tracking Url: '. $url;
  $buildmessage.='&#13;&#10;';
  $buildmessage.='For any assistance or enquiry please drop a mail at contact@bivapublication.com ;';
  $buildmessage.='&#13;&#10;';
  $buildmessage.='&#13;&#10;';
  $buildmessage.='Thanks & Regards,';
  $buildmessage.='&#13;&#10;';
  $buildmessage.='BP Team';
  $buildmessage.='&#13;&#10;';
  $buildmessage.='Kolkata';
  $buildmessage.='&#13;&#10;';
  $buildmessage.='+91 9434343446';
  $buildmessage.='&#13;&#10;';
  $buildmessage.='"Imagination! Xperience ours, Xplore yours"';
}
?>

<div class="alert alert-warning " role="alert">
  <strong>Warning!</strong> <?php echo $mssage; ?>
</div>

<div class="form-group">
  <label for="txtEmailID">Customer Email</label>
  <input type="email" class="form-control" id="txtEmailID" value="<?php echo $Email; ?>" readonly name="txtEmailID" placeholder="Email">
</div>
<div class="form-group">
  <label for="txtMessage">Message Body</label>
  <textarea Id="txtMessage" class="form-control" name="txtMessage" rows="11"><?php echo $buildmessage; ?></textarea>
</div>
<div class="row">
  <p align="center">
    <input type="submit" name="btnSendMail" value="Send Email" class="btn btn-success">
    <?php if(isset($TentetiveDate)): ?>
    <input type="button" name="btnSendMail" value="Cancel" class="btn btn-danger" onclick="javascript:window.open('<?php echo base_url(); ?>admin/order/Pending','_self');">
  <?php else: ?>
    <input type="button" name="btnSendMail" value="Cancel" class="btn btn-danger" onclick="javascript:window.open('<?php echo base_url(); ?>admin/order/Readytoship','_self');">
  <?php endif; ?>
  </p>
</div
<?php echo form_close(); ?>
