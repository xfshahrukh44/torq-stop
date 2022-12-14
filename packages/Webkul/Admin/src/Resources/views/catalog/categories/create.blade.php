@extends('admin::layouts.content')

@section('page_title')
    {{ __('admin::app.catalog.categories.add-title') }}
@stop

@section('content')
    <div class="content">
        <form method="POST" id="create_category_form" action="{{ route('admin.catalog.categories.store') }}" @submit.prevent="onSubmit" enctype="multipart/form-data">
            <div class="page-header">
                <div class="page-title">
                    <h1>
                        <i class="icon angle-left-icon back-link" onclick="window.location = '{{ route('admin.catalog.categories.index') }}'"></i>

                        {{ __('admin::app.catalog.categories.add-title') }}
                    </h1>
                </div>

                <div class="page-action">
                    <button type="submit" class="btn btn-lg btn-primary">
                        {{ __('admin::app.catalog.categories.save-btn-title') }}
                    </button>
                </div>
            </div>

            <div class="page-content">
                <div class="form-container">
                    @csrf()

                    <input type="hidden" name="locale" value="all"/>

                    {!! view_render_event('bagisto.admin.catalog.category.create_form_accordian.general.before') !!}

                    <accordian :title="'{{ __('admin::app.catalog.categories.general') }}'" :active="true">
                        <div slot="body">
                            {!! view_render_event('bagisto.admin.catalog.category.create_form_accordian.general.controls.before') !!}

                            <div class="control-group" :class="[errors.has('name') ? 'has-error' : '']">
                                <label for="name" class="required">{{ __('admin::app.catalog.categories.name') }}</label>
                                <input type="text" v-validate="'required'" class="control" id="name" name="name" value="{{ old('name') }}" data-vv-as="&quot;{{ __('admin::app.catalog.categories.name') }}&quot;" v-slugify-target="'slug'"/>
                                <span class="control-error" v-if="errors.has('name')">@{{ errors.first('name') }}</span>
                            </div>

                            <div class="control-group" :class="[errors.has('status') ? 'has-error' : '']">
                                <label for="status" class="required">{{ __('admin::app.catalog.categories.visible-in-menu') }}</label>
                                <select class="control" v-validate="'required'" id="status" name="status" data-vv-as="&quot;{{ __('admin::app.catalog.categories.visible-in-menu') }}&quot;">
                                    <option value="1">
                                        {{ __('admin::app.catalog.categories.yes') }}
                                    </option>
                                    <option value="0">
                                        {{ __('admin::app.catalog.categories.no') }}
                                    </option>
                                </select>
                                <span class="control-error" v-if="errors.has('status')">@{{ errors.first('status') }}</span>
                            </div>

                            <div class="control-group" :class="[errors.has('position') ? 'has-error' : '']">
                                <label for="position" class="required">{{ __('admin::app.catalog.categories.position') }}</label>
                                <input type="text" v-validate="'required|numeric'" class="control" id="position" name="position" value="{{ old('position') }}" data-vv-as="&quot;{{ __('admin::app.catalog.categories.position') }}&quot;"/>
                                <span class="control-error" v-if="errors.has('position')">@{{ errors.first('position') }}</span>
                            </div>

                            {!! view_render_event('bagisto.admin.catalog.category.create_form_accordian.general.controls.after') !!}
                        </div>
                    </accordian>

                    {!! view_render_event('bagisto.admin.catalog.category.create_form_accordian.general.after') !!}

                    {!! view_render_event('bagisto.admin.catalog.category.create_form_accordian.description_images.before') !!}

                    <accordian :title="'{{ __('admin::app.catalog.categories.description-and-images') }}'" :active="true">
                        <div slot="body">
                            {!! view_render_event('bagisto.admin.catalog.category.create_form_accordian.description_images.controls.before') !!}

                            <div class="control-group" :class="[errors.has('display_mode') ? 'has-error' : '']">
                                <label for="display_mode" class="required">{{ __('admin::app.catalog.categories.display-mode') }}</label>
                                <select class="control" v-validate="'required'" id="display_mode" name="display_mode" data-vv-as="&quot;{{ __('admin::app.catalog.categories.display-mode') }}&quot;">
                                    <option value="products_and_description">
                                        {{ __('admin::app.catalog.categories.products-and-description') }}
                                    </option>
                                    <option value="products_only">
                                        {{ __('admin::app.catalog.categories.products-only') }}
                                    </option>
                                    <option value="description_only">
                                        {{ __('admin::app.catalog.categories.description-only') }}
                                    </option>
                                </select>
                                <span class="control-error" v-if="errors.has('display_mode')">@{{ errors.first('display_mode') }}</span>
                            </div>

                            <description></description>

                            <div class="control-group {!! $errors->has('image.*') ? 'has-error' : '' !!}">
                                <label>{{ __('admin::app.catalog.categories.image') }}</label>

                                <image-wrapper :button-label="'{{ __('admin::app.catalog.products.add-image-btn-title') }}'" input-name="image" :multiple="false"></image-wrapper>

                                <span class="control-error" v-if="{!! $errors->has('image.*') !!}">
                                    @foreach ($errors->get('image.*') as $key => $message)
                                        @php echo str_replace($key, 'Image', $message[0]); @endphp
                                    @endforeach
                                </span>

                                <span class="control-info mt-10">{{ __('admin::app.catalog.categories.image-size') }}</span>
                            </div>

                            {!! view_render_event('bagisto.admin.catalog.category.create_form_accordian.description_images.controls.after') !!}
                        </div>
                    </accordian>

                    {!! view_render_event('bagisto.admin.catalog.category.create_form_accordian.description_images.after') !!}

                    @if ($categories->count())
                        {!! view_render_event('bagisto.admin.catalog.category.create_form_accordian.parent_category.before') !!}

                        <accordian :title="'{{ __('admin::app.catalog.categories.parent-category') }}'" :active="true">
                            <div slot="body">

                                {!! view_render_event('bagisto.admin.catalog.category.create_form_accordian.parent_category.controls.before') !!}

                                <tree-view value-field="id" name-field="parent_id" input-type="radio" items='@json($categories)' fallback-locale="{{ config('app.fallback_locale') }}"></tree-view>

                                {!! view_render_event('bagisto.admin.catalog.category.create_form_accordian.parent_category.controls.after') !!}

                            </div>
                        </accordian>

                        {!! view_render_event('bagisto.admin.catalog.category.create_form_accordian.parent_category.after') !!}
                    @endif

                    <accordian :title="'{{ __('admin::app.catalog.categories.filterable-attributes') }}'" :active="true">
                        <div slot="body">
                            <?php $selectedaAtributes = old('attributes') ? old('attributes') : ['11']  ?>

                            <div class="control-group multi-select" :class="[errors.has('attributes[]') ? 'has-error' : '']">
                                <label for="attributes" class="required">{{ __('admin::app.catalog.categories.attributes') }}</label>
                                <select class="control" name="attributes[]" v-validate="'required'" data-vv-as="&quot;{{ __('admin::app.catalog.categories.attributes') }}&quot;" multiple>

                                    @foreach ($attributes as $attribute)
                                        <option value="{{ $attribute->id }}" {{ in_array($attribute->id, $selectedaAtributes) ? 'selected' : ''}}>
                                            {{ $attribute->name ? $attribute->name : $attribute->admin_name }}
                                        </option>
                                    @endforeach

                                </select>
                                <span class="control-error" v-if="errors.has('attributes[]')">
                                    @{{ errors.first('attributes[]') }}
                                </span>
                            </div>
                        </div>
                    </accordian>

                    {!! view_render_event('bagisto.admin.catalog.category.create_form_accordian.seo.before') !!}

                    <accordian :title="'{{ __('admin::app.catalog.categories.seo') }}'" :active="true">
                        <div slot="body">
                            {!! view_render_event('bagisto.admin.catalog.category.create_form_accordian.seo.controls.before') !!}

                            <div class="control-group">
                                <label for="meta_title">{{ __('admin::app.catalog.categories.meta_title') }}</label>
                                <input type="text" class="control" id="meta_title" name="meta_title" value="{{ old('meta_title') }}"/>
                            </div>

                            <div class="control-group" :class="[errors.has('slug') ? 'has-error' : '']">
                                <label for="slug" class="required">{{ __('admin::app.catalog.categories.slug') }}</label>
                                <input type="text" v-validate="'required'" class="control" id="slug" name="slug" value="{{ old('slug') }}" data-vv-as="&quot;{{ __('admin::app.catalog.categories.slug') }}&quot;" v-slugify/>
                                <span class="control-error" v-if="errors.has('slug')">@{{ errors.first('slug') }}</span>
                            </div>

                            <div class="control-group">
                                <label for="meta_description">{{ __('admin::app.catalog.categories.meta_description') }}</label>
                                <textarea class="control" id="meta_description" name="meta_description">{{ old('meta_description') }}</textarea>
                            </div>

                            <div class="control-group">
                                <label for="meta_keywords">{{ __('admin::app.catalog.categories.meta_keywords') }}</label>
                                <textarea class="control" id="meta_keywords" name="meta_keywords">{{ old('meta_keywords') }}</textarea>
                            </div>

                            {!! view_render_event('bagisto.admin.catalog.category.create_form_accordian.seo.controls.after') !!}
                        </div>
                    </accordian>

                    {!! view_render_event('bagisto.admin.catalog.category.create_form_accordian.seo.after') !!}

                    <accordian title="Custom Fields" :active="true">
                        <div slot="body">
                            <label class="btn btn-lg btn-primary mb-40 btn_add_custom_field" style="display: inline-block; width: auto;">Add Custom Field</label>
                            <label class="btn btn-lg btn-danger mb-40 btn_remove_custom_field" style="display: inline-block; width: auto;" hidden="true">Remove Custom Field</label>

                            <div class="custom_fields_wrapper">
                                {{--                                <div class="row">--}}
                                {{--                                    <div class="control-group">--}}
                                {{--                                        <label for="slug" class="required">Title</label>--}}
                                {{--                                        <input type="text" v-validate="'required'" class="control custom_fields_titles" value="" name="custom_fields_titles[]"/>--}}
                                {{--                                    </div>--}}

                                {{--                                    <div class="control-group">--}}
                                {{--                                        <label for="slug" class="required">Name</label>--}}
                                {{--                                        <input type="text" v-validate="'required'" class="control custom_fields_names" value="" readonly name="custom_fields_names[]"/>--}}
                                {{--                                    </div>--}}

                                {{--                                    <div class="control-group">--}}
                                {{--                                        <label for="slug" class="required">Type</label>--}}
                                {{--                                        <select id="" v-validate="'required'" class="control custom_fields_types" name="custom_fields_types[]">--}}
                                {{--                                            <option value="Text">Text</option>--}}
                                {{--                                            <option value="Selection">Selection</option>--}}
                                {{--                                        </select>--}}
                                {{--                                    </div>--}}

                                {{--                                    <div class="control-group" style="display: none;">--}}
                                {{--                                        <label for="slug" class="required">Selection Options (comma seperated)</label>--}}
                                {{--                                        <input type="text" v-validate="" class="control custom_fields_selection_options" value="" name="custom_fields_selection_options[]"/>--}}
                                {{--                                    </div>--}}
                                {{--                                </div>--}}
                            </div>

                        </div>
                    </accordian>
                </div>
            </div>
        </form>
    </div>
@stop

@push('scripts')
    @include('admin::layouts.tinymce')

    <script type="text/x-template" id="description-template">
        <div class="control-group" :class="[errors.has('description') ? 'has-error' : '']">
            <label for="description" :class="isRequired ? 'required' : ''">{{ __('admin::app.catalog.categories.description') }}</label>
            <textarea v-validate="isRequired ? 'required' : ''"  class="control" id="description" name="description" data-vv-as="&quot;{{ __('admin::app.catalog.categories.description') }}&quot;">{{ old('description') }}</textarea>
            <span class="control-error" v-if="errors.has('description')">@{{ errors.first('description') }}</span>
        </div>
    </script>

    <script>
        Vue.component('description', {
            template: '#description-template',

            inject: ['$validator'],

            data: function() {
                return {
                    isRequired: true
                }
            },

            created: function () {
                let self = this;

                $(document).ready(function () {
                    $('#display_mode').on('change', function (e) {
                        if ($('#display_mode').val() != 'products_only') {
                            self.isRequired = true;
                        } else {
                            self.isRequired = false;
                        }
                    });

                    tinyMCEHelper.initTinyMCE({
                        selector: 'textarea#description',
                        height: 200,
                        width: "100%",
                        plugins: 'image imagetools media wordcount save fullscreen code table lists link hr',
                        toolbar1: 'formatselect | bold italic strikethrough forecolor backcolor link hr | alignleft aligncenter alignright alignjustify | numlist bullist outdent indent  | removeformat | code | table',
                    });

                    //hide remove custom field button by default
                    $('.btn_remove_custom_field').css('display', 'none');

                    //btn_add_custom_field
                    $('.btn_add_custom_field').on('click', function () {
                        $('.custom_fields_wrapper').append(`<div class="row">
                                                                <div class="control-group">
                                                                    <label for="slug" class="required">Title</label>
                                                                    <input type="text" v-validate="'required'" class="control custom_fields_titles" value="" name="custom_fields_titles[]"/>
                                                                </div>

                                                                <div class="control-group">
                                                                    <label for="slug" class="required">Name</label>
                                                                    <input type="text" v-validate="'required'" class="control custom_fields_names" value="" readonly name="custom_fields_names[]"/>
                                                                </div>

                                                                <div class="control-group">
                                                                    <label for="slug" class="required">Type</label>
                                                                    <select id="" v-validate="'required'" class="control custom_fields_types" name="custom_fields_types[]">
                                                                        <option value="Text">Text</option>
                                                                        <option value="Selection">Selection</option>
                                                                    </select>
                                                                </div>

                                                                <div class="control-group" style="display: none;">
                                                                    <label for="slug">Selection Options (comma seperated)</label>
                                                                    <input type="text" class="control custom_fields_selection_options" value="" name="custom_fields_selection_options[]"/>
                                                                </div>
                                                            </div>`);

                        $('.btn_remove_custom_field').css('display', ($('.custom_fields_wrapper').children().length == 0) ? 'none' : 'inline-block');
                    })

                    //btn_remove_custom_field
                    $('.btn_remove_custom_field').on('click', function () {
                        $('.custom_fields_wrapper').children().last().remove();

                        $(this).css('display', ($('.custom_fields_wrapper').children().length == 0) ? 'none' : 'inline-block');
                    });

                    //custom_fields_titles
                    $('body').on('change keyup', '.custom_fields_titles', function () {
                        let value = $(this).val();
                        let sibling_name_field = $(this).parent().parent().children('div').eq(1).find('.custom_fields_names');

                        //check for unique
                        let title = $(this).val();
                        let title_occurence = 0;
                        $('.custom_fields_titles').each(function () {
                            title_occurence += ($(this).val().toLowerCase() == title.toLowerCase()) ? 1 : 0;
                        });
                        if(title_occurence > 1) {
                            $(this).val('');
                            sibling_name_field.val('');
                            return alert('Two fields cannot have the same title.');
                        }


                        populateNameField(sibling_name_field, value);
                    });

                    function populateNameField(field, value) {
                        let slug = value.trim().replaceAll(' ', '_').toLowerCase();


                        // let suffix = 0;
                        // let check = false;
                        //
                        // // while (!check) {
                        //     $('.custom_fields_names').not(field).each(function(index, item) {
                        //         // check = !($(this).val() == slug && field.get(0) != $(this).get(0));
                        //         check = !($(this).val() == slug);
                        //
                        //         if(!check) {
                        //             return false;
                        //         }
                        //     });
                        //
                        //     if (!check) {
                        //         suffix += 1;
                        //     }
                        // // }
                        //
                        // slug += (suffix == 0) ? '' : ('_' + suffix.toString());

                        field.val(slug);
                    }

                    //custom_fields_types
                    $('body').on('change', '.custom_fields_types', function () {
                        $(this).parent().parent().children().last().css('display', ($(this).val() == 'Selection' ? 'inline-block' : 'none'));
                        $(this).parent().parent().children().last().prop('required', ($(this).val() == 'Selection'));
                    });
                });
            },
        });
    </script>
@endpush