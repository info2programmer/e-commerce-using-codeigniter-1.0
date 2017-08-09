<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
<?php foreach($pendingorder as $order): ?>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="<?php echo "heading".$order->OrderId; ?>">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#<?php echo $order->OrderId; ?>" aria-expanded="false" aria-controls="<?php echo $order->OrderId; ?>">
          <?php echo "Order Id- #ORDBPH".$order->OrderId." | Order Date&Time - ".$order->OrderDateTime." | Order By - ".$order->OrderShipName." | Order Status- ".$order->OrderStatus; ?>
        </a>
      </h4>
    </div>
    <div id="<?php echo $order->OrderId; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="<?php echo "heading".$order->OrderId; ?>">
      <div class="panel-body">
      <h4>Order Item For Order ID- <span style="color:#dd4814">#ORDBPH<?php echo $order->OrderId; ?></span></h4>
      <table class="table table-bordered table-striped table-condensed">
      <tr>
        <th>Product Name</th>
        <th>Cover Image</th>
        <th>Author</th>
        <th>Price</th>
        <th>Edition</th>
        <th>Quantity</th>
      </tr>
      <?php foreach($this->home_model->getorderitembyid($order->OrderId) as $orderItem): ?>
        <tr>
          <td><?php echo $orderItem->ItemName; ?></td>
          <td><img src="<?php echo base_url(); ?>assets/productthumb/<?php echo $orderItem->ProductThumbImage; ?>" width="75px" height="75px" ></td>
          <td><?php echo $orderItem->ItemAuther; ?></td>
          <td><?php echo $orderItem->ItemSellingPrice; ?></td>
          <td><?php echo $orderItem->ItemEdition; ?></td>
          <td><?php echo $orderItem->ItemQuantity; ?></td>
        </tr>
      <?php endforeach; ?>
      </table>
      <h4>Shipping Address</h4>
      <table class="table table-bordered table-striped table-condensed">
        <tr>
          <th>Shipping Address</th>
          <th>Shipping City</th>
          <th>Shipping Landmark</th>
          <th>Shipping Pin</th>
          <th>Shipping State</th>
          <th>Phone Number</th>
          <th>Email</th>
          <th>Notes</th>
          <th>Order Status</th>
        </tr>
        <tr>
          <td><?php echo $order->OrderShipAddressL1."<br/>".$order->OrderShipAddressL2."<br/>".$order->OrderShipAddressL3."<br/>".$order->OrderShipAddressL4; ?></td>
          <td><?php echo $order->OrderCity; ?></td>
          <td><?php echo $order->OrderLandmark; ?></td>
          <td><?php echo $order->OrderZip; ?></td>
          <td><?php echo $order->OrderState; ?></td>
          <td><?php echo $order->OrderPhone; ?></td>
          <td><?php echo $order->OrderEmail; ?></td>
          <td><?php echo $order->OrderNotes; ?></td>
          <td><?php echo $order->OrderStatus ; ?></td>
        </tr>
      </table>
      <div class="row">
        <div class="col-sm-6">
          <h4><strong>Delivery Address</strong></h4>
          <p>Address:<?php echo $order->OrderShipAddressL1."<br/>".$order->OrderShipAddressL2."<br/>".$order->OrderShipAddressL3."<br/>".$order->OrderShipAddressL4; ?></p>
          <p>Landmark : <?php echo $order->OrderLandmark; ?></p>
          <p>City : <?php echo $order->OrderCity; ?></p>
          <p>Pin :  <?php echo $order->OrderZip; ?></p>
        </div>
        <div class="col-sm-6">
          <h4>Total Amount :<?php echo $order->OrderTotAmount; ?>/-(<strong style="color:green"><?php echo $order->PaymentMode; ?></strong>)</h4>
        </div>
      </div>
      <br/>
      <?php if($order->OrderStatus=="Pending"): ?>
      <div class="row"> <!-- Pending Order Section -->
        <?php echo form_open('admin/confirmOrder/'); ?>
        <div class="col-sm-6">
          Tentative Date* : <input type="date" placeholder="yyyy-mm-dd" name="txtDate" Id="txtDate" class="form-control col-sm-6">&nbsp;
          <?php echo form_hidden('txtOrderId',$order->OrderId); ?>
          <?php echo form_hidden('txtEmail',$order->OrderEmail); ?>
        </div>
        <div class="col-sm-6"><br/><button type="submit" class="btn btn-success col-sm-6 ordcon" data-orderid="<?php echo $order->OrderId;  ?>">Confirm Order</button>
        </div>
        <?php echo form_close(); ?>
        <?php echo form_open('admin/cancelorderbyid/'); ?>
        <div class="col-sm-6">
          Cencel Text* : <input type="text" placeholder="Cancel Reason" name="txtCancel" Id="txtCancel" class="form-control col-sm-6">&nbsp;
          <?php echo form_hidden('txtOrderId',$order->OrderId); ?>
        </div>
        <div class="col-sm-6"><br/><button type="submit" class="btn btn-danger col-sm-6 ordcon" data-orderid="<?php echo $order->OrderId;  ?>">Cancel Order</button>
        </div>
        <?php echo form_close(); ?>
      </div><!-- End Pending Order Section -->
    <?php elseif($order->OrderStatus=="Confirmed"): ?>
      <p align="center"><a href="<?php echo base_url(); ?>admin/readytoship/<?php echo $order->OrderId; ?>" class="btn btn-warning">Ready To Ship</a></p>
    <?php elseif($order->OrderStatus=="Readytoship"): ?>
      <?php echo form_open('admin/orderreadytoship') ?>
      <div class="row">
        <div class="col-sm-3">
          Shipment Date :*<input type="date" name="txtShipmentDate" placeholder="yyyy-mm-dd" Id="txtShipmentDate" class="form-control">
        </div>
        <div class="col-sm-3">
          Courir Agency :*<select class="form-control" name="ddlCuriar">
            <option value="Aramex">Aramex</option>
            <option value="DTDC">DTDC</option>
            <option value="Indian Post">Indian Post</option>
            <option value="Shree Maruti Courier">Shree Maruti Courier</option>
            <option value="Trackon Courier">Trackon Courier</option>
            <option value="The Professional Couriers">The Professional Couriers</option>
            <option value="Biva Publication Self">Biva Publication Self</option>
          </select>
        </div>
        <div class="col-sm-3">
          Tracking ID :*
          <input type="text" class="form-control" name="txtTrackingId">
          <?php echo form_hidden('txtOrderId',$order->OrderId); ?>
          <?php echo form_hidden('txtEmail',$order->OrderEmail); ?>
        </div>
        <div class="col-sm-3">
          <br/>
          <button type="submit" class="btn btn-default" name="">Ship Now</button>
        </div>
      </div>
      <?php echo form_close(); ?>
      <!-- ready to ship order -->
      <?php elseif($order->OrderStatus=="Shipped"): ?>
        <!-- Get Shipment Data by Shipment Name -->
        <div class="text-center alert alert-success">
        <?php $this->admin_model->getShipmentDataByOrderid($order->OrderId); ?>
      </div>
        <?php echo form_open('admin/deliverdorder'); ?>
          <div class=row>
              <div class="col-sm-6">
              Delivery Date :*<input type="date" name="txtDeliveryDate" placeholder="yyyy-mm-dd" Id="txtDeliveryDate" class="form-control">
              <?php echo form_hidden('txtOrderId',$order->OrderId); ?></div>
              <div class="col-sm-6">
                <br/>
              <button type="submit" class="btn btn-default" name="">Delivered</button>
            </div>
        <?php echo form_close(); ?>
      </div>
      <?php endif; ?>
      </div>
    </div>
  </div>
<?php endforeach; ?>
</div>
