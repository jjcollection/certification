<?php
/* @var $this ProfilDosenController */
/* @var $data ProfilDosen */
?>

<div class="table-responsive">
    <table class="table">
        <tbody>
            <tr>

                <td>
                    <?php echo CHtml::encode($data->getAttributeLabel('kodeDosen')); ?>
                </td>
                <td>
                    <a href="#"><span class="label label-success"><?php echo CHtml::link(CHtml::encode($data->kodeDosen), array('view', 'id' => $data->kodeDosen)); ?></span></a>
                </td>
            </tr>

            <tr>

                <td>
                    <?php echo CHtml::encode($data->getAttributeLabel('namaDosen')); ?>
                </td>
                <td>
                    <?php echo CHtml::encode($data->namaDosen); ?>
                </td>
            </tr>
            <tr>

                <td>
                    <?php echo CHtml::encode($data->getAttributeLabel('telp')); ?>
                </td>
                <td>
                    <?php echo CHtml::encode($data->telp); ?>
                </td>
            </tr>
            <tr>

                <td>
                    <?php echo CHtml::encode($data->getAttributeLabel('email')); ?>
                </td>
                <td>
                    <?php echo CHtml::encode($data->email); ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?php echo CHtml::encode($data->getAttributeLabel('alamat')); ?>
                </td>
                <td>
                    <?php echo CHtml::encode($data->alamat); ?>
                </td>
            </tr>
        </tbody>
    </table>
</div>
