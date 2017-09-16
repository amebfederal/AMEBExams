{!! csrf_field() !!}



<div class="form-group">
    <label class="col-sm-3 control-label">Title</label>

    <div class="col-sm-6">
        <input type="text" class="form-control" name="title" placeholder="Title"
               value="{{ old('title', isset($faq->title) ? $faq->title : '') }}"/>
        <span class="validation-error">{{ $errors->first('title') }}</span>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-3 control-label">Course <span class="text-danger">*</span></label>

    <div class="col-sm-6">
        <select class="form-control" name="faq_category_id" id="faq_category_id">

                @foreach($faqCategories as $category)
                <option value="{{$category->id}}"
                @if(isset($savedCategory))
                    {{$category->id==$savedCategory->id?'selected="selected"':''}}
                        @endif
                >{{$category->title}}
                </option>
                   @endforeach;


        </select>
        <span class="validation-error">{{ $errors->first('faq_category_id') }}</span>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-3 control-label">Description</label>

    <div class="col-sm-9">
         <textarea class="ckeditor" cols="80" id="editor1" name="description" rows="10" placeholder="Description">
            {{ old('description', isset($faq->description) ? $faq->description : '') }}
            </textarea>
        <span class="validation-error">{{ $errors->first('description') }}</span>
    </div>
</div>



<div class="form-group">
    <label class="col-sm-3 control-label">Status</label>

    <div class="col-sm-6">
        <select class="form-control" name="status">
            <option value="active"
                    {{ old('status', isset($faq->status) ? $faq->status : '') == 'active' ? 'selected="selected"' : '' }}
                    >Active
            </option>
            <option value="in_active"
                    {{ old('status', isset($faq->status) ? $faq->status : '') == 'in_active' ? 'selected="selected"' : '' }}
                    >Inactive
            </option>
        </select>
        <span class="validation-error">{{ $errors->first('status') }}</span>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-3 control-label"></label>

    <div class="col-sm-6">
        <button type="submit" class="btn btn-success btn-sm">Save</button>
        <a href="{{ route('faq.index') }}" class="btn btn-default btn-sm">
            <i class="fa fa-aw fa-reply-o"></i> Back
        </a>
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