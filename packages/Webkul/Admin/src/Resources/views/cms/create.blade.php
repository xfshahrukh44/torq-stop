@extends('admin::layouts.content')

@section('page_title')
    {{ __('admin::app.cms.pages.add-title') }}
@stop

@section('content')
    <div class="content">
        <form method="POST" action="{{ route('admin.cms.store') }}" @submit.prevent="onSubmit">

            <div class="page-header">
                <div class="page-title">
                    <h1>
                        <i class="icon angle-left-icon back-link" onclick="window.location = '{{ route('admin.cms.index') }}'"></i>

                        {{ __('admin::app.cms.pages.add-title') }}
                    </h1>
                </div>

                <div class="page-action">
                    <button type="submit" class="btn btn-lg btn-primary">
                        {{ __('admin::app.cms.pages.create-btn-title') }}
                    </button>
                </div>
            </div>

            <div class="page-content">

                <div class="form-container">
                    @csrf()

                    {!! view_render_event('bagisto.admin.cms.pages.create_form_accordian.general.before') !!}

                    <accordian :title="'{{ __('admin::app.cms.pages.general') }}'" :active="true">
                        <div slot="body">
                            <div class="control-group" :class="[errors.has('page_title') ? 'has-error' : '']">
                                <label for="page_title" class="required">{{ __('admin::app.cms.pages.page-title') }}</label>

                                <input type="text" class="control" name="page_title" v-validate="'required'" value="{{ old('page_title') }}" data-vv-as="&quot;{{ __('admin::app.cms.pages.page-title') }}&quot;">

                                <span class="control-error" v-if="errors.has('page_title')">@{{ errors.first('page_title') }}</span>
                            </div>

                            @inject('channels', 'Webkul\Core\Repositories\ChannelRepository')

                            <div class="control-group multi-select" :class="[errors.has('channels[]') ? 'has-error' : '']">
                                <label for="url-key" class="required">{{ __('admin::app.cms.pages.channel') }}</label>

                                <select type="text" class="control" name="channels[]" v-validate="'required'" value="{{ old('channel[]') }}" data-vv-as="&quot;{{ __('admin::app.cms.pages.channel') }}&quot;" multiple="multiple">
                                    @foreach($channels->all() as $channel)
                                        <option value="{{ $channel->id }}">{{ core()->getChannelName($channel) }}</option>
                                    @endforeach
                                </select>

                                <span class="control-error" v-if="errors.has('channels[]')">@{{ errors.first('channels[]') }}</span>
                            </div>

                            <div class="control-group" :class="[errors.has('logo') ? 'has-error' : '']">
                                <label class="col-sm-12 col-md-2 col-form-label">Logo</label>
                                <div class="img-upload ml-3">
                                    <div id="image-preview" class="img-preview"
                                        {{--                                         style="background:url({{ !empty($abouts->getMedia('mission_section_image')->first())--}}
                                        {{--                        ? $abouts->getMedia('mission_section_image')->first()->getUrl()--}}
                                        {{--                        : 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d1/Image_not_available.png/640px-Image_not_available.png' }})"--}}
                                    >
                                        <label for="image-upload" class="img-label"
                                               id="image-label">{{ __('Upload Logo') }}</label>
                                        <input type="file" name="logo"
                                               class="img-upload @error('logo') is-invalid @enderror"
                                               id="image-upload"
                                               value="">
                                    </div>
                                    @error('logo')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="control-group" :class="[errors.has('sliderImage0') ? 'has-error' : '']">
                                <label class="col-sm-12 col-md-2 col-form-label">Slider One Image</label>
                                <div class="img-upload ml-3">
                                    <div id="image-preview" class="img-preview"
{{--                                         style="background:url({{ !empty($abouts->getMedia('mission_section_image')->first())--}}
{{--                        ? $abouts->getMedia('mission_section_image')->first()->getUrl()--}}
{{--                        : 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d1/Image_not_available.png/640px-Image_not_available.png' }})"--}}
                                    >
                                        <label for="image-upload" class="img-label"
                                               id="image-label">{{ __('Upload Image') }}</label>
                                        <input type="file" name="sliderImage0"
                                               class="img-upload @error('sliderImage0') is-invalid @enderror"
                                               id="image-upload"
                                               value="">
                                    </div>
                                    @error('sliderImage0')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="control-group">
                                <label>Slider One Heading</label>
                                <input type="text" class="control" name="sliderHeading0">

                            </div>

                            <div class="control-group" :class="[errors.has('html_content') ? 'has-error' : '']">
                                <label class="col-sm-12 col-md-2 col-form-label">Slider Two Image</label>
                                <div class="img-upload ml-3">
                                    <div id="image-preview" class="img-preview"
                                        {{--                                         style="background:url({{ !empty($abouts->getMedia('mission_section_image')->first())--}}
                                        {{--                        ? $abouts->getMedia('mission_section_image')->first()->getUrl()--}}
                                        {{--                        : 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d1/Image_not_available.png/640px-Image_not_available.png' }})"--}}
                                    >
                                        <label for="image-upload" class="img-label"
                                               id="image-label">{{ __('Upload Image') }}</label>
                                        <input type="file" name="sliderImage1"
                                               class="img-upload @error('sliderImage1') is-invalid @enderror"
                                               id="image-upload"
                                               value="">
                                    </div>
                                    @error('sliderImage1')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="control-group" :class="[errors.has('sliderHeading1') ? 'has-error' : '']">
                                <label for="html_content" class="required">Slider Two Heading</label>

                                <input type="text" class="control" id="content" name="sliderHeading1" data-vv-as="&quot;{{ __('admin::app.cms.pages.content') }}&quot;">{{ old('sliderHeading1') }}
{{--                                <span class="control-error" v-if="errors.has('html_content')">@{{ errors.first('html_content') }}</span>--}}
                            </div>
                            <div class="control-group" :class="[errors.has('sliderDes1') ? 'has-error' : '']">
                                <label for="html_content" class="required">Slider Two Description</label>

                                <input type="text" class="control" id="content" name="sliderDes1" data-vv-as="&quot;{{ __('admin::app.cms.pages.content') }}&quot;">{{ old('sliderDes1') }}
{{--                                <span class="control-error" v-if="errors.has('html_content')">@{{ errors.first('html_content') }}</span>--}}
                            </div>

                            <div class="control-group" :class="[errors.has('sliderImage2') ? 'has-error' : '']">
                                <label class="col-sm-12 col-md-2 col-form-label">Slider Three Image</label>
                                <div class="img-upload ml-3">
                                    <div id="image-preview" class="img-preview"
                                        {{--                                         style="background:url({{ !empty($abouts->getMedia('mission_section_image')->first())--}}
                                        {{--                        ? $abouts->getMedia('mission_section_image')->first()->getUrl()--}}
                                        {{--                        : 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d1/Image_not_available.png/640px-Image_not_available.png' }})"--}}
                                    >
                                        <label for="image-upload" class="img-label"
                                               id="image-label">{{ __('Upload Image') }}</label>
                                        <input type="file" name="sliderImage2"
                                               class="img-upload @error('sliderImage2') is-invalid @enderror"
                                               id="image-upload"
                                               value="">
                                    </div>
                                    @error('sliderImage2')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="control-group" :class="[errors.has('sliderHeading2') ? 'has-error' : '']">
                                <label for="html_content" class="required">Slider Three Heading</label>

                                <input type="text" class="control" id="content" name="sliderHeading2" data-vv-as="&quot;{{ __('admin::app.cms.pages.content') }}&quot;">{{ old('sliderHeading2') }}
{{--                                <span class="control-error" v-if="errors.has('html_content')">@{{ errors.first('html_content') }}</span>--}}
                            </div>
                            <div class="control-group" :class="[errors.has('sliderDes2') ? 'has-error' : '']">
                                <label for="html_content" class="required">Slider Three Description</label>

                                <input type="text" class="control" id="content" name="sliderDes2" data-vv-as="&quot;{{ __('admin::app.cms.pages.content') }}&quot;">{{ old('sliderDes2') }}
{{--                                <span class="control-error" v-if="errors.has('html_content')">@{{ errors.first('html_content') }}</span>--}}
                            </div>

                            <div class="control-group" :class="[errors.has('html_content') ? 'has-error' : '']">
                                <label for="html_content" class="required">{{ __('admin::app.cms.pages.content') }}</label>

                                <textarea type="text" class="control" id="content" name="content" v-validate="'required'" data-vv-as="&quot;{{ __('admin::app.cms.pages.content') }}&quot;">{{ old('html_content') }}</textarea>

                                <span class="control-error" v-if="errors.has('html_content')">@{{ errors.first('html_content') }}</span>
                            </div>

                            <h1>Info Card Section</h1>

                            <div class="control-group" :class="[errors.has('html_content') ? 'has-error' : '']">
                                <label for="html_content" class="required">Info Card Image 1</label>
                                <div class="img-upload ml-3">
                                    <div id="image-preview" class="img-preview"
                                        {{--                                         style="background:url({{ !empty($abouts->getMedia('mission_section_image')->first())--}}
                                        {{--                        ? $abouts->getMedia('mission_section_image')->first()->getUrl()--}}
                                        {{--                        : 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d1/Image_not_available.png/640px-Image_not_available.png' }})"--}}
                                    >
                                        <label for="image-upload" class="img-label"
                                               id="image-label">{{ __('Upload Image') }}</label>
                                        <input type="file" name="infoImage0"
                                               class="img-upload @error('mission_images') is-invalid @enderror"
                                               id="image-upload"
                                               value="">
                                    </div>
                                    @error('mission_images')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="control-group" :class="[errors.has('infoHeading0') ? 'has-error' : '']">
                                <label for="html_content" class="required">Info Card Heading 1</label>

                                <input type="text" class="control" id="content" name="infoHeading0" data-vv-as="&quot;{{ __('admin::app.cms.pages.content') }}&quot;" value="{{ old('infoHeading0') }}">
{{--                                <span class="control-error" v-if="errors.has('html_content')">@{{ errors.first('html_content') }}</span>--}}
                            </div>

                            <div class="control-group" :class="[errors.has('html_content') ? 'has-error' : '']">
                                <label for="html_content" class="required">Info Card Image 2</label>
                                <div class="img-upload ml-3">
                                    <div id="image-preview" class="img-preview"
                                        {{--                                         style="background:url({{ !empty($abouts->getMedia('mission_section_image')->first())--}}
                                        {{--                        ? $abouts->getMedia('mission_section_image')->first()->getUrl()--}}
                                        {{--                        : 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d1/Image_not_available.png/640px-Image_not_available.png' }})"--}}
                                    >
                                        <label for="image-upload" class="img-label"
                                               id="image-label">{{ __('Upload Image') }}</label>
                                        <input type="file" name="infoImage1"
                                               class="img-upload @error('mission_images') is-invalid @enderror"
                                               id="image-upload"
                                               value="">
                                    </div>
                                    @error('mission_images')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="control-group" :class="[errors.has('infoHeading1') ? 'has-error' : '']">
                                <label for="html_content" class="required">Info Card Heading 2</label>

                                <input type="text" class="control" id="content" name="infoHeading1"  data-vv-as="&quot;{{ __('admin::app.cms.pages.content') }}&quot;">{{ old('infoHeading1') }}
{{--                                <span class="control-error" v-if="errors.has('html_content')">@{{ errors.first('html_content') }}</span>--}}
                            </div>

                            <div class="control-group" :class="[errors.has('html_content') ? 'has-error' : '']">
                                <label for="html_content" class="required">Info Card Image 3</label>
                                <div class="img-upload ml-3">
                                    <div id="image-preview" class="img-preview"
                                        {{--                                         style="background:url({{ !empty($abouts->getMedia('mission_section_image')->first())--}}
                                        {{--                        ? $abouts->getMedia('mission_section_image')->first()->getUrl()--}}
                                        {{--                        : 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d1/Image_not_available.png/640px-Image_not_available.png' }})"--}}
                                    >
                                        <label for="image-upload" class="img-label"
                                               id="image-label">{{ __('Upload Image') }}</label>
                                        <input type="file" name="infoImage2"
                                               class="img-upload @error('mission_images') is-invalid @enderror"
                                               id="image-upload"
                                               value="">
                                    </div>
                                    @error('mission_images')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="control-group" :class="[errors.has('infoHeading2') ? 'has-error' : '']">
                                <label for="html_content" class="required">Info Card Heading 3</label>
                                <input type="text" class="control" id="content" name="infoHeading2" data-vv-as="&quot;{{ __('admin::app.cms.pages.content') }}&quot;">{{ old('infoHeading2') }}
{{--                                <span class="control-error" v-if="errors.has('html_content')">@{{ errors.first('html_content') }}</span>--}}
                            </div>

                            <div class="control-group" :class="[errors.has('html_content') ? 'has-error' : '']">
                                <label for="html_content" class="required">Info Card Image 4</label>
                                <div class="img-upload ml-3">
                                    <div id="image-preview" class="img-preview"
                                        {{--                                         style="background:url({{ !empty($abouts->getMedia('mission_section_image')->first())--}}
                                        {{--                        ? $abouts->getMedia('mission_section_image')->first()->getUrl()--}}
                                        {{--                        : 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d1/Image_not_available.png/640px-Image_not_available.png' }})"--}}
                                    >
                                        <label for="image-upload" class="img-label"
                                               id="image-label">{{ __('Upload Image') }}</label>
                                        <input type="file" name="infoImage3"
                                               class="img-upload @error('mission_images') is-invalid @enderror"
                                               id="image-upload"
                                               value="">
                                    </div>
                                    @error('mission_images')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="control-group" :class="[errors.has('infoHeading3') ? 'has-error' : '']">
                                <label for="html_content" class="required">Info Card Heading 4</label>

                                <input type="text" class="control" id="content" name="infoHeading3" data-vv-as="&quot;{{ __('admin::app.cms.pages.content') }}&quot;">{{ old('infoHeading3') }}>
{{--                                <span class="control-error" v-if="errors.has('html_content')">@{{ errors.first('html_content') }}</span>--}}
                            </div>

                            <div class="control-group" :class="[errors.has('html_content') ? 'has-error' : '']">
                                <label for="html_content" class="required">Info Card Image 5</label>
                                <div class="img-upload ml-3">
                                    <div id="image-preview" class="img-preview"
                                        {{--                                         style="background:url({{ !empty($abouts->getMedia('mission_section_image')->first())--}}
                                        {{--                        ? $abouts->getMedia('mission_section_image')->first()->getUrl()--}}
                                        {{--                        : 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d1/Image_not_available.png/640px-Image_not_available.png' }})"--}}
                                    >
                                        <label for="image-upload" class="img-label"
                                               id="image-label">{{ __('Upload Image') }}</label>
                                        <input type="file" name="infoImage4"
                                               class="img-upload @error('mission_images') is-invalid @enderror"
                                               id="image-upload"
                                               value="">
                                    </div>
                                    @error('mission_images')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="control-group" :class="[errors.has('infoHeading4') ? 'has-error' : '']">
                                <label for="html_content" class="required">Info Card Heading 5</label>

                                <input type="text" class="control" id="content" name="infoHeading4" data-vv-as="&quot;{{ __('admin::app.cms.pages.content') }}&quot;">{{ old('infoHeading4') }}
{{--                                <span class="control-error" v-if="errors.has('html_content')">@{{ errors.first('html_content') }}</span>--}}
                            </div>

                        </div>
                  </accordian>

                    {!! view_render_event('bagisto.admin.cms.pages.create_form_accordian.general.after') !!}


                    {!! view_render_event('bagisto.admin.cms.pages.create_form_accordian.seo.before') !!}

                    <accordian :title="'{{ __('admin::app.cms.pages.seo') }}'" :active="true">
                        <div slot="body">
                            <div class="control-group">
                                <label for="meta_title">{{ __('admin::app.cms.pages.meta_title') }}</label>

                                <input type="text" class="control" name="meta_title" value="{{ old('meta_title') }}">
                            </div>

                            <div class="control-group" :class="[errors.has('url_key') ? 'has-error' : '']">
                                <label for="url-key" class="required">{{ __('admin::app.cms.pages.url-key') }}</label>

                                <input type="text" class="control" name="url_key" v-validate="'required'" value="{{ old('url_key') }}" data-vv-as="&quot;{{ __('admin::app.cms.pages.url-key') }}&quot;" v-slugify>

                                <span class="control-error" v-if="errors.has('url_key')">@{{ errors.first('url_key') }}</span>
                            </div>

                            <div class="control-group">
                                <label for="meta_keywords">{{ __('admin::app.cms.pages.meta_keywords') }}</label>

                                <textarea type="text" class="control" name="meta_keywords">{{ old('meta_keywords') }}</textarea>
                            </div>

                            <div class="control-group">
                                <label for="meta_description">{{ __('admin::app.cms.pages.meta_description') }}</label>

                                <textarea type="text" class="control" name="meta_description">{{ old('meta_description') }}</textarea>

                            </div>
                        </div>
                    </accordian>

                    {!! view_render_event('bagisto.admin.cms.pages.create_form_accordian.seo.after') !!}
                </div>
            </div>
        </form>
    </div>
@stop

@push('scripts')
    @include('admin::layouts.tinymce')

    <script>
        $(document).ready(function () {
            tinyMCEHelper.initTinyMCE({
                selector: 'textarea#content',
                height: 200,
                width: "100%",
                plugins: 'image imagetools media wordcount save fullscreen code table lists link hr',
                toolbar1: 'formatselect | bold italic strikethrough forecolor backcolor alignleft aligncenter alignright alignjustify | link hr |numlist bullist outdent indent  | removeformat | code | table',
                image_advtab: true,
                valid_elements : '*[*]',
            });
        });
    </script>
@endpush
