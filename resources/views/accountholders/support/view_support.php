@extends('accountholders.layouts.layouts')

@section ('title', 'Notifications')

@section('content')

        <div class="col-md-9">
<div class="row">
    <div class="col-md-12">
        <div class="panel">
<div class="panel-body">
<h3 class="title-hero">
    Support Tickets 
</h3>
<div class="content-box">
<div class="mail-toolbar clearfix">
    <div class="float-left">
        <a href="#" title="" class="btn btn-default mrg5R">
        Refresh
            <i class="glyph-icon font-size-11 icon-refresh"></i>
        </a>
        <a href="create_ticket.php" title="" class="btn btn-default mrg5R">
            New Ticket
            <i class="glyph-icon font-size-11 icon-plus"></i>
        </a>
        <div class="dropdown">
            <a href="#" title="" class="btn btn-default" data-toggle="dropdown">
            Action
                <i class="glyph-icon icon-chevron-down"></i>
            </a>
            <ul class="dropdown-menu float-right">
                <li>
                    <a href="#" title="">
                        <i class="glyph-icon icon-reply mrg5R"></i>
                        Reply
                    </a>
                </li>
                <li>
                    <a href="#" title="">
                        <i class="glyph-icon icon-close mrg5R"></i>
                        Close Ticket
                    </a>
                </li>
                <li>
                    <a href="#" title="">
                        <i class="glyph-icon icon-check mrg5R"></i>
                        Mark Resolved
                    </a>
                </li>
                <li>
                    <a href="#" title="">
                        <i class="glyph-icon icon-refresh mrg5R"></i>
                        Re-Open
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="#" class="font-red" title="">
                        <i class="glyph-icon icon-remove mrg5R"></i>
                        Delete
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="float-right">
        <div class="btn-toolbar">
            <div class="btn-group">
                <div class="size-md mrg10R">
                    1 to 11 of 21 entries
                </div>
            </div>
        </div>
    </div>
</div>
<table class="table table-hover text-center">
<tbody>
<tr>
    <td>
        <div class="checker" id="uniform-mail-checkbox-1"><span><input id="mail-checkbox-1" class="custom-checkbox" type="checkbox"><i class="glyph-icon icon-check"></i></span></div>
    </td>
    <td>
        <i class="glyph-icon icon-star"></i>
    </td>
    <td class="email-title">
        <a href="view_ticket.php">Steven Koening</a>
    </td>
    <td class="email-body">
        In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do.
    </td>
    <td>
        <i class="glyph-icon icon-paperclip"></i>
    </td>
    <td>
        17 Jan 2014
    </td>
</tr>
<tr>
    <td>
        <div class="checker" id="uniform-mail-checkbox-2"><span><input id="mail-checkbox-2" class="custom-checkbox" type="checkbox"><i class="glyph-icon icon-check"></i></span></div>
    </td>
    <td>
        <i class="glyph-icon icon-star"></i>
    </td>
    <td class="email-title">
        Rubin Spinella
    </td>
    <td class="email-body">
        The wise man therefore always holds in these matters to this principle of selection.
    </td>
    <td>
        <i class="glyph-icon icon-paperclip"></i>
    </td>
    <td>
        27 Jan 2014
    </td>
</tr>
<tr>
    <td>
        <div class="checker" id="uniform-mail-checkbox-3"><span><input id="mail-checkbox-3" class="custom-checkbox" type="checkbox"><i class="glyph-icon icon-check"></i></span></div>
    </td>
    <td>
        <i class="glyph-icon icon-star"></i>
    </td>
    <td class="email-title">
        Han Gattis
    </td>
    <td class="email-body">
        We denounce with righteous
    </td>
    <td>
        <i class="glyph-icon icon-paperclip"></i>
    </td>
    <td>
        21 Feb 2014
    </td>
</tr>
<tr>
    <td>
        <div class="checker" id="uniform-mail-checkbox-4"><span><input id="mail-checkbox-4" class="custom-checkbox" type="checkbox"><i class="glyph-icon icon-check"></i></span></div>
    </td>
    <td>
        <i class="glyph-icon icon-star"></i>
    </td>
    <td class="email-title">
        Steven Koening
    </td>
    <td class="email-body">
        In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do.
    </td>
    <td>
        <i class="glyph-icon icon-paperclip"></i>
    </td>
    <td>
        17 Jan 2014
    </td>
</tr>
<tr>
    <td>
        <div class="checker" id="uniform-mail-checkbox-5"><span><input id="mail-checkbox-5" class="custom-checkbox" type="checkbox"><i class="glyph-icon icon-check"></i></span></div>
    </td>
    <td>
        <i class="glyph-icon icon-star"></i>
    </td>
    <td class="email-title">
        Rubin Spinella
    </td>
    <td class="email-body">
        The wise man therefore always holds in these matters to this principle of selection.
    </td>
    <td>
        <i class="glyph-icon icon-paperclip"></i>
    </td>
    <td>
        27 Jan 2014
    </td>
</tr>
<tr>
    <td>
        <div class="checker" id="uniform-mail-checkbox-6"><span><input id="mail-checkbox-6" class="custom-checkbox" type="checkbox"><i class="glyph-icon icon-check"></i></span></div>
    </td>
    <td>
        <i class="glyph-icon icon-star"></i>
    </td>
    <td class="email-title">
        Lila Helwig
    </td>
    <td class="email-body">
        What we like best, every pleasure is to be welcomed and every pain avoided.
    </td>
    <td>
        <i class="glyph-icon icon-paperclip"></i>
    </td>
    <td>
        21 Feb 2014
    </td>
</tr>
<tr>
    <td>
        <div class="checker" id="uniform-mail-checkbox-7"><span><input id="mail-checkbox-7" class="custom-checkbox" type="checkbox"><i class="glyph-icon icon-check"></i></span></div>
    </td>
    <td>
        <i class="glyph-icon icon-star"></i>
    </td>
    <td class="email-title">
        Han Gattis
    </td>
    <td class="email-body">
        We denounce with righteous
    </td>
    <td>
        <i class="glyph-icon icon-paperclip"></i>
    </td>
    <td>
        21 Feb 2014
    </td>
</tr>
<tr>
    <td>
        <div class="checker" id="uniform-mail-checkbox-8"><span><input id="mail-checkbox-8" class="custom-checkbox" type="checkbox"><i class="glyph-icon icon-check"></i></span></div>
    </td>
    <td>
        <i class="glyph-icon icon-star"></i>
    </td>
    <td class="email-title">
        Steven Koening
    </td>
    <td class="email-body">
        In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do.
    </td>
    <td>
        <i class="glyph-icon icon-paperclip"></i>
    </td>
    <td>
        17 Jan 2014
    </td>
</tr>
<tr>
    <td>
        <div class="checker" id="uniform-mail-checkbox-9"><span><input id="mail-checkbox-9" class="custom-checkbox" type="checkbox"><i class="glyph-icon icon-check"></i></span></div>
    </td>
    <td>
        <i class="glyph-icon icon-star"></i>
    </td>
    <td class="email-title">
        Rubin Spinella
    </td>
    <td class="email-body">
        The wise man therefore always holds in these matters to this principle of selection.
    </td>
    <td>
        <i class="glyph-icon icon-paperclip"></i>
    </td>
    <td>
        27 Jan 2014
    </td>
</tr>
<tr>
    <td>
        <div class="checker" id="uniform-mail-checkbox-15"><span><input id="mail-checkbox-15" class="custom-checkbox" type="checkbox"><i class="glyph-icon icon-check"></i></span></div>
    </td>
    <td>
        <i class="glyph-icon icon-star"></i>
    </td>
    <td class="email-title">
        Steven Koening
    </td>
    <td class="email-body">
        In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do.
    </td>
    <td>
        <i class="glyph-icon icon-paperclip"></i>
    </td>
    <td>
        17 Jan 2014
    </td>
</tr>
</tbody>
</table>

</div>
</div>
</div>
    </div>

</div>

        </div>
    </div>

@endsection
@section('page-specific-scripts')
<!-- Calendar -->
@section('page-specific-scripts')
@endsection