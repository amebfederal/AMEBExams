<?php
function delete_form($url, $label = 'Delete', $class = '', $title = '', $isButton = true)
{
    $form = Form::open(['method' => 'DELETE', 'url' => $url, 'class' => 'deleteContentForm']);
    if( $isButton ) {
        $form .= "<button type='submit' class='$class deleteContentButton' title='$title' data-toggle='tooltip' data-placement='top' data-original-title='$title'>";
        $form .= "<i class='glyph-icon icon-trash'
                                        aria-hidden='true'></i> $label";
        $form .= '</button>';
    }else{
        $form .= "<span class='deleteContentButton'><i
                                        class='glyph-icon icon-trash'
                                        aria-hidden='true'></i> $label </span>";
    }
    return $form .= Form::close();
}

function formatDate($date, $format = 'Y-m-d', $onlyMonthYear = false)
{
    if($date == '0000-00-00' || empty($date))
        return '-';
    $formatOption = getOptions('date_format');
    $format = $formatOption ? $formatOption : $format;

    return date($format, strtotime($date));
}

function formatDateTime($dateTime, $requestedFormat='')
{
    if($dateTime == '0000-00-00 00:00:00' || empty($dateTime))
        return '-';
    $formatOption = getOptions('date_format') ? getOptions('date_format') . ' h:i a' : 'Y-m-d H:i:s';
    $format = $requestedFormat ? $requestedFormat : $formatOption;

    return date($format, strtotime($dateTime));
}


function getOptions($name = NULL)
{
    $optionModel = new \App\Modules\Models\Option\Option();

    if ($name) {
        $option = $optionModel->where('name', '=', $name)->first();

        return $option ? $option->value : '';
    } else {
        $options = new \stdClass();

        $allOptions = $optionModel->all();
        foreach ($allOptions as $option) {
            $options->{$option->name} = $option->value;
        }

        return $options;
    }

}

