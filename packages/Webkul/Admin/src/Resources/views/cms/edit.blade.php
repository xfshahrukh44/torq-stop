@extends('admin::layouts.content')

@section('page_title')
    {{ __('admin::app.cms.pages.edit-title') }}
@stop

@push('css')
    <style>
    @media only screen and (max-width: 768px){
        .content-container .content .page-header .page-action button {
            position: relative;
            right: 0px !important;
            top: 0px !important;
        }

        .content-container .content .page-header .page-title .control-group {
            margin-top: 20px!important;
            width: 100%!important;
            margin-left: 0!important;
        }
    }
    </style>
@endpush

@section('content')
    <div class="content">
        @php
            $locale = core()->getRequestedLocaleCode();
            $decoded_content = json_decode($page->content);
        @endphp
{{--        @dd($decoded_content)--}}

        <form method="POST" id="page-form" action="" @submit.prevent="onSubmit">

            <div class="page-header">
                <div class="page-title">
                    <h1>
                        <i class="icon angle-left-icon back-link" onclick="window.location = '{{ route('admin.cms.index') }}'"></i>

                        {{ __('admin::app.cms.pages.edit-title') }}
                    </h1>

                    <div class="control-group">
                        <select class="control" id="locale-switcher" onChange="window.location.href = this.value">
                            @foreach (core()->getAllLocales() as $localeModel)

                                <option value="{{ route('admin.cms.edit', $page->id) . '?locale=' . $localeModel->code }}" {{ ($localeModel->code) == $locale ? 'selected' : '' }}>
                                    {{ $localeModel->name }}
                                </option>

                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="page-action">
                    @if ($page->translate($locale))
                        <a href="{{ route('shop.cms.page', $page->translate($locale)['url_key']) }}" class="btn btn-lg btn-primary" target="_blank">
                            {{ __('admin::app.cms.pages.preview') }}
                        </a>
                    @endif

                    <button type="submit" class="btn btn-lg btn-primary">
                        {{ __('admin::app.cms.pages.edit-btn-title') }}
                    </button>
                </div>
            </div>

            <div class="page-content">

                <div class="form-container">
                    @csrf()
                    <accordian :title="'{{ __('admin::app.cms.pages.general') }}'" :active="true">
                        <div slot="body">
                            <div class="control-group" :class="[errors.has('{{$locale}}[page_title]') ? 'has-error' : '']">
                                <label for="page_title" class="required">{{ __('admin::app.cms.pages.page-title') }}</label>

                                <input type="text" class="control" name="{{$locale}}[page_title]" v-validate="'required'" value="{{ old($locale)['page_title'] ?? ($page->translate($locale)['page_title'] ?? '') }}" data-vv-as="&quot;{{ __('admin::app.cms.pages.page-title') }}&quot;">

                                <span class="control-error" v-if="errors.has('{{$locale}}[page_title]')">@{{ errors.first('{!!$locale!!}[page_title]') }}</span>
                            </div>

                            <div class="control-group multi-select" :class="[errors.has('channels[]') ? 'has-error' : '']">
                                <label for="url-key" class="required">{{ __('admin::app.cms.pages.channel') }}</label>

                                <?php $selectedOptionIds = old('inventory_sources') ?: $page->channels->pluck('id')->toArray() ?>

                                <select type="text" class="control" name="channels[]" v-validate="'required'" value="{{ old('channel[]') }}" data-vv-as="&quot;{{ __('admin::app.cms.pages.channel') }}&quot;" multiple="multiple">
                                    @foreach(app('Webkul\Core\Repositories\ChannelRepository')->all() as $channel)
                                        <option value="{{ $channel->id }}" {{ in_array($channel->id, $selectedOptionIds) ? 'selected' : '' }}>
                                            {{ core()->getChannelName($channel) }}
                                        </option>
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
                                <input type="text" class="control" name="sliderHeading0" value="{{$decoded_content->sliderHeading0}}">
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

                                <input type="text" class="control" id="content" name="sliderHeading1" value="{{$decoded_content->sliderHeading1}}">
                                {{--                                <span class="control-error" v-if="errors.has('html_content')">@{{ errors.first('html_content') }}</span>--}}
                            </div>
                            <div class="control-group" :class="[errors.has('sliderDes1') ? 'has-error' : '']">
                                <label for="html_content" class="required">Slider Two Description</label>

                                <input type="text" class="control" id="content" name="sliderDes1" value="{{$decoded_content->sliderDes1}}">
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

                                <input type="text" class="control" id="content" name="sliderHeading2" value="{{$decoded_content->sliderHeading2}}">
                                {{--                                <span class="control-error" v-if="errors.has('html_content')">@{{ errors.first('html_content') }}</span>--}}
                            </div>
                            <div class="control-group" :class="[errors.has('sliderDes2') ? 'has-error' : '']">
                                <label for="html_content" class="required">Slider Three Description</label>

                                <input type="text" class="control" id="content" name="sliderDes2" value="{{$decoded_content->sliderDes2}}">
                                {{--                                <span class="control-error" v-if="errors.has('html_content')">@{{ errors.first('html_content') }}</span>--}}
                            </div>

                            <div class="control-group" :class="[errors.has('{{$locale}}[html_content]') ? 'has-error' : '']">
                                <label for="html_content" class="required">{{ __('admin::app.cms.pages.content') }}</label>

                                <textarea type="text" class="control" id="content" name="{{$locale}}[html_content]" v-validate="'required'" data-vv-as="&quot;{{ __('admin::app.cms.pages.content') }}&quot;">{{ old($locale)['html_content'] ?? ($page->translate($locale)['html_content'] ?? '') }}</textarea>

                                <span class="control-error" v-if="errors.has('{{$locale}}[html_content]')">@{{ errors.first('{!!$locale!!}[html_content]') }}</span>
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

                                <input type="text" class="control" id="content" name="infoHeading0" value="{{$decoded_content->infoHeading0}}">
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

                                <input type="text" class="control" id="content" name="infoHeading1"  value="{{$decoded_content->infoHeading1}}">
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
                                <input type="text" class="control" id="content" name="infoHeading2"  value="{{$decoded_content->infoHeading2}}">
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

                                <input type="text" class="control" id="content" name="infoHeading3" value="{{$decoded_content->infoHeading3}}">
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

                                <input type="text" class="control" id="content" name="infoHeading4" value="{{$decoded_content->infoHeading4}}">
                                {{--                                <span class="control-error" v-if="errors.has('html_content')">@{{ errors.first('html_content') }}</span>--}}
                            </div>

                        </div>
                    </accordian>

                    <accordian :title="'{{ __('admin::app.cms.pages.seo') }}'" :active="true">
                        <div slot="body">
                            <div class="control-group">
                                <label for="meta_title">{{ __('admin::app.cms.pages.meta_title') }}</label>

                                <input type="text" class="control" name="{{$locale}}[meta_title]" value="{{ old($locale)['meta_title'] ?? ($page->translate($locale)['meta_title'] ?? '') }}">
                            </div>

                            <div class="control-group" :class="[errors.has('{{$locale}}[url_key]') ? 'has-error' : '']">
                                <label for="url-key" class="required">{{ __('admin::app.cms.pages.url-key') }}</label>

                                <input type="text" class="control" name="{{$locale}}[url_key]" v-validate="'required'" value="{{ old($locale)['url_key'] ?? ($page->translate($locale)['url_key'] ?? '') }}" data-vv-as="&quot;{{ __('admin::app.cms.pages.url-key') }}&quot;">

                                <span class="control-error" v-if="errors.has('{{$locale}}[url_key]')">@{{ errors.first('{!!$locale!!}[url_key]') }}</span>
                            </div>

                            <div class="control-group">
                                <label for="meta_keywords">{{ __('admin::app.cms.pages.meta_keywords') }}</label>

                                <textarea type="text" class="control" name="{{$locale}}[meta_keywords]">{{ old($locale)['meta_keywords'] ?? ($page->translate($locale)['meta_keywords'] ?? '') }}</textarea>

                            </div>

                            <div class="control-group">
                                <label for="meta_description">{{ __('admin::app.cms.pages.meta_description') }}</label>

                                <textarea type="text" class="control" name="{{$locale}}[meta_description]">{{ old($locale)['meta_description'] ?? ($page->translate($locale)['meta_description'] ?? '') }}</textarea>

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

    <script>
        $(document).ready(function () {
            tinyMCEHelper.initTinyMCE({
                selector: 'textarea#content',
                height: 200,
                width: "100%",
                plugins: 'image imagetools media wordcount save fullscreen code table lists link hr',
                toolbar1: 'formatselect | bold italic strikethrough forecolor backcolor alignleft aligncenter alignright alignjustify | link hr | numlist bullist outdent indent  | removeformat | code | table',
                image_advtab: true,
                valid_elements : '*[*]',
            });
        });
    </script>
@endpush