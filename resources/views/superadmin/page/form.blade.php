{!! csrf_field() !!}

<div class="form-group">
    <label class="col-sm-3 control-label">Title</label>
    <div class="col-sm-6">
        <input type="text" name="title" value="{{ old('title', isset($page->title) ? $page->title : '') }}" class="form-control">
        <i class="errormsg">{{ $errors->first('title') }}</i>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-3 control-label">Description</label>

    <div class="col-sm-9">
         <textarea class="ckeditor" cols="80" id="editor1" name="description" rows="10" placeholder="Description">
            {{ old('description', isset($page->description) ? $page->description : '') }}
            </textarea>
        <span class="validation-error">{{ $errors->first('$page') }}</span>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-3 control-label">Featured Image</label>
    <div class="col-sm-6">
        @if(isset($page->image))
            <img src="{{ asset($page->thumbnail_path) }}" height="100px" alt=""/>
            <br/>
            <br/>
        @endif
        <input type="file" class="form-control" name="file"/>
        <span class="validation-error">{{ $errors->first('file') }}</span>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-3 control-label">Menu Position</label>
    <div class="col-sm-6">
        <input type="number" name="menu_position" value="{{ old('menu_position', isset($page->menu_position) ? $page->menu_position : '') }}" class="form-control">
        <i class="errormsg">{{ $errors->first('menu_position') }}</i>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-3 control-label">Parent Page</label>
    <div class="col-sm-6">
        <select class="form-control {{ $errors->first('parent_page_id') ? 'errorbox' : ''  }}" name="parent_page_id">
            <option value="">Select Parent Page </option>
            @foreach($pages as $page)
                <option value="{{ $page->id }}" {{ old('parent_page_id') == $page->id ? 'selected="selected"' : '' }}>
                    {{ $page->title }}</option>
            @endforeach
        </select>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-3 control-label">Availability</label>
    <div class="col-sm-6">
        <select class="form-control" name="visible">
            <option value="visibility"
                    {{ old('visible', isset($page->visible) ? $page->visible : '') == 'visibility' ? 'selected="selected"' : '' }}
            >Visibility
            </option>
            <option value="hidden"
                    {{ old('visible', isset($page->visible) ? $page->visible : '') == 'hidden' ? 'selected="selected"' : '' }}
            >Hidden
            </option>
        </select>
        <span class="validation-error">{{ $errors->first('visible') }}</span>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-3 control-label">Display On Menu <span class="text-danger"></span></label>
    <div class="col-sm-6">
        <select class="form-control" name="display_on_menu">
            <option value="yes"
                    {{ old('display_on_menu', isset($page->display_on_menu) ? $page->display_on_menu : '') == 'yes' ? 'selected="selected"' : '' }}
            >Yes
            </option>
            <option value="no"
                    {{ old('display_on_menu', isset($page->display_on_menu) ? $page->display_on_menu : '') == 'no' ? 'selected="selected"' : '' }}
            >No
            </option>
        </select>
        <span class="validation-error">{{ $errors->first('display_on_menu') }}</span>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-3 control-label">Status <span class="text-danger"></span></label>
    <div class="col-sm-6">
        <select class="form-control" name="status">
            <option value="active"
                    {{ old('status', isset($session->status) ? $session->status : '') == 'active' ? 'selected="selected"' : '' }}
            >Active
            </option>
            <option value="in_active"
                    {{ old('status', isset($session->status) ? $session->status : '') == 'in_active' ? 'selected="selected"' : '' }}
            >Inactive
            </option>
        </select>
        <span class="validation-error">{{ $errors->first('status') }}</span>
    </div>
</div>


<div class="form-group">
    <label class="col-sm-3 control-label"></label>
    <div class="col-sm-6">
        <input type="submit" name="" value="Save" class="btn btn-success">
    </div>
</div>
@section('page-specific-scripts')
    <script type="text/javascript" src="{{asset('resources/assets/widgets/ckeditor/ckeditor.js')}}"></script>
    <script>

        // This code is generally not necessary, but it is here to demonstrate
        // how to customize specific editor instances on the fly. This fits well
        // this demo because we have editable elements (like headers) that
        // require less features.

        // The "instanceCreated" event is fired for every editor instance created.
        CKEDITOR.on( 'instanceCreated', function( event ) {
            var editor = event.editor,
                    element = editor.element;

            // Customize editors for headers and tag list.
            // These editors don't need features like smileys, templates, iframes etc.
            if ( element.is( 'h1', 'h2', 'h3' ) || element.getAttribute( 'id' ) == 'taglist' ) {
                // Customize the editor configurations on "configLoaded" event,
                // which is fired after the configuration file loading and
                // execution. This makes it possible to change the
                // configurations before the editor initialization takes place.
                editor.on( 'configLoaded', function() {

                    // Remove unnecessary plugins to make the editor simpler.
                    editor.config.removePlugins = 'colorbutton,find,flash,font,' +
                            'forms,iframe,image,newpage,removeformat,' +
                            'smiley,specialchar,stylescombo,templates';

                    // Rearrange the layout of the toolbar.
                    editor.config.toolbarGroups = [
                        { name: 'editing',		groups: [ 'basicstyles', 'links' ] },
                        { name: 'undo' },
                        { name: 'clipboard',	groups: [ 'selection', 'clipboard' ] },
                        { name: 'about' }
                    ];
                });
            }
        });

    </script>
@endsection