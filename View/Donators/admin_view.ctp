<div id="DonatorsAdminView">
    <h3><?php echo __('View Donators', true); ?></h3><hr />
    <div class="col-md-12">

        <div class="col-md-2">Name</div>
        <div class="col-md-9">&nbsp;<?php
            if ($this->data['Donator']['name']) {

                echo $this->data['Donator']['name'];
            }
?>&nbsp;
        </div>
        <div class="col-md-2">Taiwan ID</div>
        <div class="col-md-9">&nbsp;<?php
            if ($this->data['Donator']['twid']) {

                echo $this->data['Donator']['twid'];
            }
?>&nbsp;
        </div>
        <div class="col-md-2">Phone</div>
        <div class="col-md-9">&nbsp;<?php
            if ($this->data['Donator']['phone']) {

                echo $this->data['Donator']['phone'];
            }
?>&nbsp;
        </div>
        <div class="col-md-2">Mobile Phone</div>
        <div class="col-md-9">&nbsp;<?php
            if ($this->data['Donator']['phone_mobile']) {

                echo $this->data['Donator']['phone_mobile'];
            }
?>&nbsp;
        </div>
        <div class="col-md-2">Email</div>
        <div class="col-md-9">&nbsp;<?php
            if ($this->data['Donator']['email']) {

                echo $this->data['Donator']['email'];
            }
?>&nbsp;
        </div>
        <div class="col-md-2">Contact Address</div>
        <div class="col-md-9">&nbsp;<?php
            if ($this->data['Donator']['address_contact']) {

                echo $this->data['Donator']['address_contact'];
            }
?>&nbsp;
        </div>
        <div class="col-md-2">Registered Address</div>
        <div class="col-md-9">&nbsp;<?php
            if ($this->data['Donator']['address_registered']) {

                echo $this->data['Donator']['address_registered'];
            }
?>&nbsp;
        </div>
        <div class="col-md-2">Contact Postcode</div>
        <div class="col-md-9">&nbsp;<?php
            if ($this->data['Donator']['postcode_contact']) {

                echo $this->data['Donator']['postcode_contact'];
            }
?>&nbsp;
        </div>
        <div class="col-md-2">Registered Postcode</div>
        <div class="col-md-9">&nbsp;<?php
            if ($this->data['Donator']['postcode_registered']) {

                echo $this->data['Donator']['postcode_registered'];
            }
?>&nbsp;
        </div>
    </div>
    <hr />
    <div class="actions">
        <ul>
            <li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Donator.id')), null, __('Delete the item, sure?', true)); ?></li>
            <li><?php echo $this->Html->link(__('Donators List', true), array('action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link(__('View Related Donations', true), array('controller' => 'donations', 'action' => 'index', 'Donator', $this->data['Donator']['id']), array('class' => 'DonatorsAdminViewControl')); ?></li>
        </ul>
    </div>
    <div id="DonatorsAdminViewPanel"></div>
<?php
echo $this->Html->scriptBlock('

');
?>
    <script type="text/javascript">
        //<![CDATA[
        $(function() {
            $('a.DonatorsAdminViewControl').click(function() {
                $('#DonatorsAdminViewPanel').parent().load(this.href);
                return false;
            });
        });
        //]]>
    </script>
</div>