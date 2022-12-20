@extends('admin::layouts.content')

@section('page_title')
    {{ __('admin::app.catalog.categories.edit-title') }}
@stop

@push('css')
    <style>
        @media only screen and (max-width: 768px){
            .content-container .content .page-header .page-title .control-group .control{
                width: 100% !important;
                margin-top:-25px !important;
            }
        }
    </style>
@endpush

@section('content')
    <div class="content">
        @php
            $locale = core()->getRequestedLocaleCode();
        @endphp

        <form method="POST" action="" @submit.prevent="onSubmit" enctype="multipart/form-data">
            <div class="page-header">
                <div class="page-title">
                    <h1>
                        <i class="icon angle-left-icon back-link" onclick="window.location = '{{ route('admin.catalog.categories.index') }}'"></i>

                        {{ __('admin::app.catalog.categories.edit-title') }}
                    </h1>

                    <div class="control-group">
                        <select class="control" id="locale-switcher" onChange="window.location.href = this.value">
                            @foreach (core()->getAllLocales() as $localeModel)

                                <option value="{{ route('admin.catalog.categories.update', $category->id) . '?locale=' . $localeModel->code }}" {{ ($localeModel->code) == $locale ? 'selected' : '' }}>
                                    {{ $localeModel->name }}
                                </option>

                            @endforeach
                        </select>
                    </div>
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

                    <input name="_method" type="hidden" value="PUT">

                    {!! view_render_event('bagisto.admin.catalog.category.edit_form_accordian.general.before', ['category' => $category]) !!}

                    <accordian :title="'{{ __('admin::app.catalog.categories.general') }}'" :active="true">
                        <div slot="body">
                            {!! view_render_event('bagisto.admin.catalog.category.edit_form_accordian.general.controls.before', ['category' => $category]) !!}

                            <div class="control-group" :class="[errors.has('{{$locale}}[name]') ? 'has-error' : '']">
                                <label for="name" class="required">{{ __('admin::app.catalog.categories.name') }}
                                    <span class="locale">[{{ $locale }}]</span>
                                </label>
                                <input type="text" v-validate="'required'" class="control" id="name" name="{{$locale}}[name]" value="{{ old($locale)['name'] ?? ($category->translate($locale)['name'] ?? '') }}" data-vv-as="&quot;{{ __('admin::app.catalog.categories.name') }}&quot;" v-slugify-target="'slug'"/>
                                <span class="control-error" v-if="errors.has('{{$locale}}[name]')">@{{ errors.first('{!!$locale!!}[name]') }}</span>
                            </div>

                            <div class="control-group" :class="[errors.has('status') ? 'has-error' : '']">
                                <label for="status" class="required">{{ __('admin::app.catalog.categories.visible-in-menu') }}</label>
                                <select class="control" v-validate="'required'" id="status" name="status" data-vv-as="&quot;{{ __('admin::app.catalog.categories.visible-in-menu') }}&quot;">
                                    <option value="1" {{ $category->status ? 'selected' : '' }}>
                                        {{ __('admin::app.catalog.categories.yes') }}
                                    </option>
                                    <option value="0" {{ $category->status ? '' : 'selected' }}>
                                        {{ __('admin::app.catalog.categories.no') }}
                                    </option>
                                </select>
                                <span class="control-error" v-if="errors.has('status')">@{{ errors.first('status') }}</span>
                            </div>

                            <div class="control-group" :class="[errors.has('position') ? 'has-error' : '']">
                                <label for="position" class="required">{{ __('admin::app.catalog.categories.position') }}</label>
                                <input type="text" v-validate="'required|numeric'" class="control" id="position" name="position" value="{{ old('position') ?: $category->position }}" data-vv-as="&quot;{{ __('admin::app.catalog.categories.position') }}&quot;"/>
                                <span class="control-error" v-if="errors.has('position')">@{{ errors.first('position') }}</span>
                            </div>

                            {!! view_render_event('bagisto.admin.catalog.category.edit_form_accordian.general.controls.after', ['category' => $category]) !!}
                        </div>
                    </accordian>

                    {!! view_render_event('bagisto.admin.catalog.category.edit_form_accordian.general.after', ['category' => $category]) !!}

                    {!! view_render_event('bagisto.admin.catalog.category.edit_form_accordian.description_images.before', ['category' => $category]) !!}

                    <accordian :title="'{{ __('admin::app.catalog.categories.description-and-images') }}'" :active="true">
                        <div slot="body">
                            {!! view_render_event('bagisto.admin.catalog.category.edit_form_accordian.description_images.controls.before', ['category' => $category]) !!}

                            <div class="control-group" :class="[errors.has('display_mode') ? 'has-error' : '']">
                                <label for="display_mode" class="required">{{ __('admin::app.catalog.categories.display-mode') }}</label>
                                <select class="control" v-validate="'required'" id="display_mode" name="display_mode" data-vv-as="&quot;{{ __('admin::app.catalog.categories.display-mode') }}&quot;">
                                    <option value="products_and_description" {{ $category->display_mode == 'products_and_description' ? 'selected' : '' }}>
                                        {{ __('admin::app.catalog.categories.products-and-description') }}
                                    </option>
                                    <option value="products_only" {{ $category->display_mode == 'products_only' ? 'selected' : '' }}>
                                        {{ __('admin::app.catalog.categories.products-only') }}
                                    </option>
                                    <option value="description_only" {{ $category->display_mode == 'description_only' ? 'selected' : '' }}>
                                        {{ __('admin::app.catalog.categories.description-only') }}
                                    </option>
                                </select>
                                <span class="control-error" v-if="errors.has('display_mode')">@{{ errors.first('display_mode') }}</span>
                            </div>

                            <description></description>

                            <div class="control-group {!! $errors->has('image.*') ? 'has-error' : '' !!}">
                                <label>{{ __('admin::app.catalog.categories.image') }}</label>

                                <image-wrapper :button-label="'{{ __('admin::app.catalog.products.add-image-btn-title') }}'" input-name="image" :multiple="false"  :images='"{{ $category->image_url }}"'></image-wrapper>

                                <span class="control-error" v-if="{!! $errors->has('image.*') !!}">
                                    @foreach ($errors->get('image.*') as $key => $message)
                                        @php echo str_replace($key, 'Image', $message[0]); @endphp
                                    @endforeach
                                </span>
                            </div>

                            {!! view_render_event('bagisto.admin.catalog.category.edit_form_accordian.description_images.controls.after', ['category' => $category]) !!}
                        </div>
                    </accordian>

                    {!! view_render_event('bagisto.admin.catalog.category.edit_form_accordian.description_images.after', ['category' => $category]) !!}

                    @if ($categories->count())
                        {!! view_render_event('bagisto.admin.catalog.category.edit_form_accordian.parent_category.before', ['category' => $category]) !!}

                        <accordian :title="'{{ __('admin::app.catalog.categories.parent-category') }}'" :active="true">
                            <div slot="body">

                                {!! view_render_event('bagisto.admin.catalog.category.edit_form_accordian.parent_category.controls.before', ['category' => $category]) !!}

                                <tree-view value-field="id" name-field="parent_id" input-type="radio" items='@json($categories)' value='@json($category->parent_id)' fallback-locale="{{ config('app.fallback_locale') }}"></tree-view>

                                {!! view_render_event('bagisto.admin.catalog.category.edit_form_accordian.parent_category.controls.before', ['category' => $category]) !!}

                            </div>
                        </accordian>

                        {!! view_render_event('bagisto.admin.catalog.category.edit_form_accordian.parent_category.after', ['category' => $category]) !!}
                    @endif

                    <accordian :title="'{{ __('admin::app.catalog.categories.filterable-attributes') }}'" :active="true">
                        <div slot="body">
                            <?php $selectedaAtributes = old('attributes') ?? $category->filterableAttributes->pluck('id')->toArray() ?>

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

                    {!! view_render_event('bagisto.admin.catalog.category.edit_form_accordian.seo.before', ['category' => $category]) !!}

                    <accordian :title="'{{ __('admin::app.catalog.categories.seo') }}'" :active="true">
                        <div slot="body">
                            {!! view_render_event('bagisto.admin.catalog.category.edit_form_accordian.seo.controls.before', ['category' => $category]) !!}

                            <div class="control-group">
                                <label for="meta_title">{{ __('admin::app.catalog.categories.meta_title') }}
                                    <span class="locale">[{{ $locale }}]</span>
                                </label>
                                <input type="text" class="control" id="meta_title" name="{{$locale}}[meta_title]" value="{{ old($locale)['meta_title'] ?? ($category->translate($locale)['meta_title'] ?? '') }}"/>
                            </div>

                            <div class="control-group" :class="[errors.has('{{$locale}}[slug]') ? 'has-error' : '']">
                                <label for="slug" class="required">{{ __('admin::app.catalog.categories.slug') }}
                                    <span class="locale">[{{ $locale }}]</span>
                                </label>
                                <input type="text" v-validate="'required'" class="control" id="slug" name="{{$locale}}[slug]" value="{{ old($locale)['slug'] ?? ($category->translate($locale)['slug'] ?? '') }}" data-vv-as="&quot;{{ __('admin::app.catalog.categories.slug') }}&quot;" v-slugify/>
                                <span class="control-error" v-if="errors.has('{{$locale}}[slug]')">@{{ errors.first('{!!$locale!!}[slug]') }}</span>
                            </div>

                            <div class="control-group">
                                <label for="meta_description">{{ __('admin::app.catalog.categories.meta_description') }}
                                    <span class="locale">[{{ $locale }}]</span>
                                </label>
                                <textarea class="control" id="meta_description" name="{{$locale}}[meta_description]">{{ old($locale)['meta_description'] ?? ($category->translate($locale)['meta_description'] ?? '') }}</textarea>
                            </div>

                            <div class="control-group">
                                <label for="meta_keywords">{{ __('admin::app.catalog.categories.meta_keywords') }}
                                    <span class="locale">[{{ $locale }}]</span>
                                </label>
                                <textarea class="control" id="meta_keywords" name="{{$locale}}[meta_keywords]">{{ old($locale)['meta_keywords'] ?? ($category->translate($locale)['meta_keywords'] ?? '') }}</textarea>
                            </div>

                            {!! view_render_event('bagisto.admin.catalog.category.edit_form_accordian.seo.controls.after', ['category' => $category]) !!}
                        </div>
                    </accordian>

                    {!! view_render_event('bagisto.admin.catalog.category.edit_form_accordian.seo.after', ['category' => $category]) !!}

                    <accordian title="Custom Fields" :active="true">
                        <div slot="body">
                            <label class="btn btn-lg btn-primary mb-40 btn_add_custom_field" style="display: inline-block; width: auto;">Add Custom Field</label>
                            <label class="btn btn-lg btn-danger mb-40 btn_remove_custom_field" style="display: inline-block; width: auto;" hidden="true">Remove Custom Field</label>

                            <div class="custom_fields_wrapper">
                                @php
                                    $custom_fields = $category ? json_decode($category->custom_fields) : [];
                                @endphp

                                @if(count($custom_fields) > 0)
                                    @foreach($custom_fields as $custom_field)
                                        <div class="row">
                                            <div class="control-group">
                                                <label for="slug" class="required">Title</label>
                                                <input type="text" v-validate="'required'" class="control custom_fields_titles" value="{{$custom_field->title}}" name="custom_fields_titles[]"/>
                                            </div>

                                            <div class="control-group">
                                                <label for="slug" class="required">Name</label>
                                                <input type="text" v-validate="'required'" class="control custom_fields_names" value="{{$custom_field->name}}" readonly name="custom_fields_names[]"/>
                                            </div>

                                            <div class="control-group">
                                                <label for="slug" class="required">Type</label>
                                                <select id="" v-validate="'required'" class="control custom_fields_types" name="custom_fields_types[]">
                                                    <option value="Text" {!! $custom_field->type == 'Text' ? 'selected' : '' !!}>Text</option>
                                                    <option value="Selection" {!! $custom_field->type == 'Selection' ? 'selected' : '' !!}>Selection</option>
                                                    <option value="Number" {!! $custom_field->type == 'Number' ? 'selected' : '' !!}>Number</option>
                                                    <option value="Textarea" {!! $custom_field->type == 'Textarea' ? 'selected' : '' !!}>Textarea</option>
                                                </select>
                                            </div>

                                            <div class="control-group">
                                                <label for="slug" class="required">Is Required?</label>
                                                <select id="" v-validate="'required'" class="control custom_fields_is_required" name="custom_fields_is_required[]">
                                                    <option value="Yes" {!! $custom_field->is_required == 'Yes' ? 'selected' : '' !!}>Yes</option>
                                                    <option value="No" {!! $custom_field->is_required == 'No' ? 'selected' : '' !!}>No</option>
                                                </select>
                                            </div>

                                            <div class="control-group" style="display: {!! $custom_field->type == "Selection" ? 'inline-block' : 'none' !!};">
                                                <label for="slug" class="">Selection Options (comma seperated)</label>
                                                <input type="text" class="control custom_fields_selection_options" value="{{$custom_field->selection_options}}" name="custom_fields_selection_options[]"/>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
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
        <div class="control-group" :class="[errors.has('{{$locale}}[description]') ? 'has-error' : '']">
            <label for="description" :class="isRequired ? 'required' : ''">{{ __('admin::app.catalog.categories.description') }}
                <span class="locale">[{{ $locale }}]</span>
            </label>
            <textarea v-validate="isRequired ? 'required' : ''" class="control" id="description" name="{{$locale}}[description]" data-vv-as="&quot;{{ __('admin::app.catalog.categories.description') }}&quot;">{{ old($locale)['description'] ?? ($category->translate($locale)['description'] ?? '') }}</textarea>
            <span class="control-error" v-if="errors.has('{{$locale}}[description]')">@{{ errors.first('{!!$locale!!}[description]') }}</span>
        </div>
    </script>

    <script>
        Vue.component('description', {
            template: '#description-template',

            inject: ['$validator'],

            data: function() {
                return {
                    isRequired: true,
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
                    })

                    if ($('#display_mode').val() != 'products_only') {
                        self.isRequired = true;
                    } else {
                        self.isRequired = false;
                    }

                    tinyMCEHelper.initTinyMCE({
                        selector: 'textarea#description',
                        height: 200,
                        width: "100%",
                        plugins: 'image imagetools media wordcount save fullscreen code table lists link hr',
                        toolbar1: 'formatselect | bold italic strikethrough forecolor backcolor link hr | alignleft aligncenter alignright alignjustify | numlist bullist outdent indent  | removeformat | code | table',
                    });

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
                                                                        <option value="Number">Number</option>
                                                                        <option value="Textarea">Textarea</option>
                                                                    </select>
                                                                </div>

                                                                <div class="control-group">
                                                                    <label for="slug" class="required">Is Required?</label>
                                                                    <select id="" v-validate="'required'" class="control custom_fields_is_required" name="custom_fields_is_required[]">
                                                                        <option value="Yes">Yes</option>
                                                                        <option value="No">No</option>
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
                        let sibling_name_field = $(this).parent().parent().children('div').eq(1).find('.custom_fields_names');
                        let value = $(this).val();

                        populateNameField(sibling_name_field, value);
                    });

                    function populateNameField(field, value) {
                        let slug = value.trim().replaceAll(' ', '_').toLowerCase();


                        let suffix = 0;
                        let check = false;

                        // while (!check) {
                        $('.custom_fields_names').not(field).each(function(index, item) {
                            // check = !($(this).val() == slug && field.get(0) != $(this).get(0));
                            check = !($(this).val() == slug);

                            if(!check) {
                                return false;
                            }
                        });

                        if (!check) {
                            suffix += 1;
                        }
                        // }

                        slug += (suffix == 0) ? '' : ('_' + suffix.toString());

                        field.val(slug);
                    }

                    //custom_fields_types
                    $('body').on('change', '.custom_fields_types', function () {
                        $(this).parent().parent().children().last().css('display', ($(this).val() == 'Selection' ? 'inline-block' : 'none'));
                        $(this).parent().parent().children().last().prop('required', ($(this).val() == 'Selection'));
                    });
                });
            }
        });
    </script>
@endpush