@extends('admin::layouts.content')

@section('page_title')
    {{ __('admin::app.cms.pages.add-title') }}
@stop

@section('content')
    <div class="content">
        <form method="POST" action="{{ route('admin.cms.store') }}" @submit.prevent="onSubmit"
              enctype="multipart/form-data">

            <div class="page-header">
                <div class="page-title">
                    <h1>
                        <i class="icon angle-left-icon back-link"
                           onclick="window.location = '{{ route('admin.cms.index') }}'"></i>
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
                                <label for="page_title"
                                       class="required">{{ __('admin::app.cms.pages.page-title') }}</label>

                                <input type="text" class="control" name="page_title" v-validate="'required'"
                                       value="{{ old('page_title') }}"
                                       data-vv-as="&quot;{{ __('admin::app.cms.pages.page-title') }}&quot;">

                                <span class="control-error" v-if="errors.has('page_title')">@{{ errors.first('page_title') }}</span>
                            </div>

                            @inject('channels', 'Webkul\Core\Repositories\ChannelRepository')

                            <div class="control-group multi-select"
                                 :class="[errors.has('channels[]') ? 'has-error' : '']">
                                <label for="url-key" class="required">{{ __('admin::app.cms.pages.channel') }}</label>

                                <select type="text" class="control" name="channels[]" v-validate="'required'"
                                        value="{{ old('channel[]') }}"
                                        data-vv-as="&quot;{{ __('admin::app.cms.pages.channel') }}&quot;"
                                        multiple="multiple">
                                    @foreach($channels->all() as $channel)
                                        <option
                                            value="{{ $channel->id }}">{{ core()->getChannelName($channel) }}</option>
                                    @endforeach
                                </select>

                                <span class="control-error" v-if="errors.has('channels[]')">@{{ errors.first('channels[]') }}</span>
                            </div>

                            <h1>Home Section</h1>

                            <div class="control-group">
                                <label>Home Title</label>
                                <input type="text" class="control" name="homeHeading">
                            </div>

                            <div class="control-group">
                                <label class="col-sm-12 col-md-2 col-form-label">Logo</label>
                                <div class="img-upload ml-3">
                                    <div id="image-preview-1" class="img-preview">
                                        <img id="preview-1" src="" alt="Preview" style="display:none;">
                                        <label for="image-upload-1" class="img-label"
                                               id="image-label">{{ __('Upload Image') }}</label>
                                        <input type="file" name="logo" onchange="previewImage(event, 'preview-1')"
                                               class="img-upload @error('image1') is-invalid @enderror"
                                               id="image-upload-1"
                                               value="">
                                    </div>
                                    @error('image1')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="col-sm-12 col-md-2 col-form-label">Slider One Video</label>
                                <div class="img-upload ml-3">
                                    <div id="image-preview-2" class="img-preview">
                                        <video width="400" controls style="display:none;">
                                            <source src="" id="video_here">
                                            Your browser does not support HTML5 video.
                                        </video>
                                        <label for="image-upload-2" class="img-label"
                                               id="image-label">{{ __('Upload Slider One Video') }}</label>
                                        <input type="file" name="sliderImage0" class="file_multi_video"
                                               accept="video/*">
                                    </div>
                                    @error('image2')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="control-group">
                                <label>Slider One Heading</label>
                                <input type="text" class="control" name="sliderHeading0">
                            </div>

                            <div class="control-group">
                                <label class="col-sm-12 col-md-2 col-form-label">Slider Two Video</label>
                                <div class="img-upload ml-3">
                                    <div id="image-preview-3" class="img-preview">
                                        <video width="400" controls style="display:none;">
                                            <source src="" id="video_here1">
                                            Your browser does not support HTML5 video.
                                        </video>
                                        <label for="image-upload-3" class="img-label"
                                               id="image-label">{{ __('Upload Slider Two Video') }}</label>
                                        <input type="file" name="sliderImage1" class="file_multi_video1"
                                               accept="video/*"
                                               class="img-upload @error('sliderImage1') is-invalid @enderror"
                                               id="image-upload-3"
                                               value="">
                                    </div>
                                    @error('sliderImage1')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="control-group" :class="[errors.has('sliderHeading1') ? 'has-error' : '']">
                                <label for="html_content" class="required">Slider Two Heading</label>
                                <input type="text" class="control" id="content" name="sliderHeading1"
                                       data-vv-as="&quot;{{ __('admin::app.cms.pages.content') }}&quot;">{{ old('sliderHeading1') }}
                            </div>
                            <div class="control-group" :class="[errors.has('sliderDes1') ? 'has-error' : '']">
                                <label for="html_content" class="required">Slider Two Description</label>
                                <input type="text" class="control" id="content" name="sliderDes1"
                                       data-vv-as="&quot;{{ __('admin::app.cms.pages.content') }}&quot;">{{ old('sliderDes1') }}
                            </div>

                            <div class="control-group">
                                <label class="col-sm-12 col-md-2 col-form-label">Slider Three Image</label>
                                <div class="img-upload ml-4">
                                    <div id="image-preview-4" class="img-preview">
                                        <img id="preview-4" src="" alt="Preview" style="display:none;">
                                        <label for="image-upload-4" class="img-label"
                                               id="image-label">{{ __('Upload Image') }}</label>
                                        <input type="file" name="sliderImage2"
                                               onchange="previewImage(event, 'preview-4')"
                                               class="img-upload @error('sliderImage2') is-invalid @enderror"
                                               id="image-upload-3"
                                               value="">
                                    </div>
                                    @error('sliderImage2')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="control-group" :class="[errors.has('sliderHeading2') ? 'has-error' : '']">
                                <label for="html_content" class="required">Slider Three Heading</label>
                                <input type="text" class="control" id="content" name="sliderHeading2"
                                       data-vv-as="&quot;{{ __('admin::app.cms.pages.content') }}&quot;">{{ old('sliderHeading2') }}
                            </div>
                            <div class="control-group" :class="[errors.has('sliderDes2') ? 'has-error' : '']">
                                <label for="html_content" class="required">Slider Three Description</label>

                                <input type="text" class="control" id="content" name="sliderDes2"
                                       data-vv-as="&quot;{{ __('admin::app.cms.pages.content') }}&quot;">{{ old('sliderDes2') }}

                            </div>

                            <div class="control-group">
                                <label for="html_content"
                                       class="required">{{ __('admin::app.cms.pages.content') }}</label>
                                <textarea type="text" class="control" id="content"
                                          name="content">{{ old('content') }}</textarea>
                            </div>

                            <h1>Info Card Section</h1>

                            <div class="control-group">
                                <label class="col-sm-12 col-md-2 col-form-label">Info Card Image 1</label>
                                <div class="img-upload ml-5">
                                    <div id="image-preview-5" class="img-preview">
                                        <img id="preview-5" src="" alt="Preview" style="display:none;">
                                        <label for="image-upload-5" class="img-label"
                                               id="image-label">{{ __('Upload Image') }}</label>
                                        <input type="file" name="infoImage0" onchange="previewImage(event, 'preview-5')"
                                               class="img-upload @error('infoImage0') is-invalid @enderror"
                                               id="image-upload-3"
                                               value="">
                                    </div>
                                    @error('infoImage0')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="control-group" :class="[errors.has('infoHeading0') ? 'has-error' : '']">
                                <label for="html_content" class="required">Info Card Heading 1</label>
                                <input type="text" class="control" id="content" name="infoHeading0"
                                       data-vv-as="&quot;{{ __('admin::app.cms.pages.content') }}&quot;"
                                       value="{{ old('infoHeading0') }}">
                            </div>

                            <div class="control-group">
                                <label class="col-sm-12 col-md-2 col-form-label">Info Card Image 2</label>
                                <div class="img-upload ml-6">
                                    <div id="image-preview-6" class="img-preview">
                                        <img id="preview-6" src="" alt="Preview" style="display:none;">
                                        <label for="image-upload-6" class="img-label"
                                               id="image-label">{{ __('Upload Image') }}</label>
                                        <input type="file" name="infoImage1" onchange="previewImage(event, 'preview-6')"
                                               class="img-upload @error('infoImage1') is-invalid @enderror"
                                               id="image-upload-3"
                                               value="">
                                    </div>
                                    @error('infoImage1')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="control-group" :class="[errors.has('infoHeading1') ? 'has-error' : '']">
                                <label for="html_content" class="required">Info Card Heading 2</label>
                                <input type="text" class="control" id="content" name="infoHeading1"
                                       data-vv-as="&quot;{{ __('admin::app.cms.pages.content') }}&quot;">{{ old('infoHeading1') }}
                            </div>


                            <div class="control-group">
                                <label class="col-sm-12 col-md-2 col-form-label">Info Card Image 3</label>
                                <div class="img-upload ml-7">
                                    <div id="image-preview-7" class="img-preview">
                                        <img id="preview-7" src="" alt="Preview" style="display:none;">
                                        <label for="image-upload-7" class="img-label"
                                               id="image-label">{{ __('Upload Image') }}</label>
                                        <input type="file" name="infoImage2" onchange="previewImage(event, 'preview-7')"
                                               class="img-upload @error('infoImage2') is-invalid @enderror"
                                               id="image-upload-3"
                                               value="">
                                    </div>
                                    @error('infoImage2')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="control-group" :class="[errors.has('infoHeading2') ? 'has-error' : '']">
                                <label for="html_content" class="required">Info Card Heading 3</label>
                                <input type="text" class="control" id="content" name="infoHeading2"
                                       data-vv-as="&quot;{{ __('admin::app.cms.pages.content') }}&quot;">{{ old('infoHeading2') }}
                            </div>

                            <div class="control-group">
                                <label class="col-sm-12 col-md-2 col-form-label">Info Card Image 4</label>
                                <div class="img-upload ml-8">
                                    <div id="image-preview-8" class="img-preview">
                                        <img id="preview-8" src="" alt="Preview" style="display:none;">
                                        <label for="image-upload-8" class="img-label"
                                               id="image-label">{{ __('Upload Image') }}</label>
                                        <input type="file" name="infoImage3" onchange="previewImage(event, 'preview-8')"
                                               class="img-upload @error('infoImage3') is-invalid @enderror"
                                               id="image-upload-3"
                                               value="">
                                    </div>
                                    @error('infoImage3')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="control-group" :class="[errors.has('infoHeading3') ? 'has-error' : '']">
                                <label for="html_content" class="required">Info Card Heading 4</label>

                                <input type="text" class="control" id="content" name="infoHeading3"
                                       data-vv-as="&quot;{{ __('admin::app.cms.pages.content') }}&quot;">{{ old('infoHeading3') }}

                            </div>


                            <div class="control-group">
                                <label class="col-sm-12 col-md-2 col-form-label">Info Card Image 5</label>
                                <div class="img-upload ml-9">
                                    <div id="image-preview-9" class="img-preview">
                                        <img id="preview-9" src="" alt="Preview" style="display:none;">
                                        <label for="image-upload-9" class="img-label"
                                               id="image-label">{{ __('Upload Image') }}</label>
                                        <input type="file" name="infoImage4" onchange="previewImage(event, 'preview-9')"
                                               class="img-upload @error('infoImage4') is-invalid @enderror"
                                               id="image-upload-3"
                                               value="">
                                    </div>
                                    @error('infoImage4')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="control-group" :class="[errors.has('infoHeading4') ? 'has-error' : '']">
                                <label for="html_content" class="required">Info Card Heading 5</label>

                                <input type="text" class="control" id="content"
                                       name="infoHeading4">{{ old('infoHeading4') }}
                            </div>

                            <h1>ABOUT SECTION</h1>

                            <div class="control-group">
                                <label>About Title</label>
                                <input type="text" class="control" name="aboutHeading">
                            </div>

                            <div class="control-group">
                                <label for="html_content">About Section First Description</label>
                                <textarea type="text" class="control" id="content"
                                          name="about_sec_des">{{ old('about_sec_des') }}</textarea>
                            </div>

                            <div class="control-group">
                                <label class="col-sm-12 col-md-2 col-form-label">About Section Image</label>
                                <div class="img-upload ml-10">
                                    <div id="image-preview-10" class="img-preview">
                                        <img id="preview-10" src="" alt="Preview" style="display:none;">
                                        <label for="image-upload-10" class="img-label"
                                               id="image-label">{{ __('Upload Image') }}</label>
                                        <input type="file" name="aboutSectionImage1"
                                               onchange="previewImage(event, 'preview-10')"
                                               class="img-upload @error('aboutSectionImage1') is-invalid @enderror"
                                               id="image-upload-3"
                                               value="">
                                    </div>
                                    @error('aboutSectionImage1')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="control-group">
                                <label for="html_content">About Section Second Description</label>
                                <textarea type="text" class="control" id="content"
                                          name="about_sec_des2">{{ old('about_sec2_des') }}</textarea>
                            </div>

                            <h1>WHY CHOOSE US</h1>

                            <div class="control-group" :class="[errors.has('aboutHeading1') ? 'has-error' : '']">
                                <label for="html_content">Heading</label>
                                <input type="text" class="control" name="aboutHeading1">{{ old('aboutHeading1') }}
                            </div>

                            <div class="control-group">
                                <label for="html_content">Description</label>
                                <textarea type="text" class="control" id="content"
                                          name="about_sec_des3">{{ old('about_sec_des3') }}</textarea>
                            </div>

                            <h1>OUR PRINCIPLES</h1>

                            <div class="control-group" :class="[errors.has('aboutHeading2') ? 'has-error' : '']">
                                <label for="html_content">Heading</label>
                                <input type="text" class="control" name="aboutHeading2">{{ old('aboutHeading2') }}
                            </div>

                            <div class="control-group">
                                <label for="html_content">Description</label>
                                <textarea type="text" class="control" id="content"
                                          name="about_sec_des4">{{ old('about_sec_des4') }}</textarea>
                            </div>

                            <div class="control-group">
                                <label class="col-sm-12 col-md-2 col-form-label">About Section Image</label>
                                <div class="img-upload ml-11">
                                    <div id="image-preview-11" class="img-preview">
                                        <img id="preview-11" src="" alt="Preview" style="display:none;">
                                        <label for="image-upload-11" class="img-label"
                                               id="image-label">{{ __('Upload Image') }}</label>
                                        <input type="file" name="aboutSectionImage2"
                                               onchange="previewImage(event, 'preview-11')"
                                               class="img-upload @error('aboutSectionImage2') is-invalid @enderror"
                                               id="image-upload-3"
                                               value="">
                                    </div>
                                    @error('aboutSectionImage2')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>


                            <h1>Our Vision </h1>

                            <div class="control-group" :class="[errors.has('aboutHeading3') ? 'has-error' : '']">
                                <label for="html_content">Heading</label>
                                <input type="text" class="control" name="aboutHeading3">{{ old('aboutHeading3') }}
                            </div>

                            <div class="control-group">
                                <label for="html_content">Description</label>
                                <textarea type="text" class="control" id="content"
                                          name="about_sec_des5">{{ old('about_sec_des5') }}</textarea>
                            </div>

                            <h1>Our Mission</h1>

                            <div class="control-group" :class="[errors.has('aboutHeading4') ? 'has-error' : '']">
                                <label for="html_content">Heading</label>
                                <input type="text" class="control" name="aboutHeading4">{{ old('aboutHeading4') }}
                            </div>

                            <div class="control-group">
                                <label for="html_content">Description</label>
                                <textarea type="text" class="control" id="content"
                                          name="about_sec_des6">{{ old('about_sec_des6') }}</textarea>
                            </div>

                            <div class="control-group">
                                <label class="col-sm-12 col-md-2 col-form-label">About Section Image</label>
                                <div class="img-upload ml-12">
                                    <div id="image-preview-12" class="img-preview">
                                        <img id="preview-12" src="" alt="Preview" style="display:none;">
                                        <label for="image-upload-12" class="img-label"
                                               id="image-label">{{ __('Upload Image') }}</label>
                                        <input type="file" name="aboutSectionImage3"
                                               onchange="previewImage(event, 'preview-12')"
                                               class="img-upload @error('aboutSectionImage3') is-invalid @enderror"
                                               id="image-upload-3"
                                               value="">
                                    </div>
                                    @error('aboutSectionImage3')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <br>
                            <h1>News Letter Section</h1>

                            <div class="control-group" :class="[errors.has('newsTitle') ? 'has-error' : '']">
                                <label for="html_content">Heading</label>
                                <input type="text" class="control" name="newsTitle">{{ old('newsTitle') }}
                            </div>

                            <div class="control-group">
                                <label class="col-sm-12 col-md-2 col-form-label">About Section Image</label>
                                <div class="img-upload ml-13">
                                    <div id="image-preview-13" class="img-preview">
                                        <img id="preview-13" src="" alt="Preview" style="display:none;">
                                        <label for="image-upload-13" class="img-label"
                                               id="image-label">{{ __('Upload Image') }}</label>
                                        <input type="file" name="newsImage"
                                               onchange="previewImage(event, 'preview-13')"
                                               class="img-upload @error('newsImage') is-invalid @enderror"
                                               id="image-upload-3"
                                               value="">
                                    </div>
                                    @error('newsImage')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <h1>Footer Section</h1>
                            <div class="control-group">
                                <label>Footer Title</label>
                                <input type="text" class="control" name="footerHeading">
                            </div>

                            <div class="control-group">
                                <label for="html_content">Phone Icon</label>
                                <i class="" id="icn"></i>
                                <input type="text" id="icons" class="control" name="phoneIcon"
                                       placeholder="{{ __('Phone Icon') }}">
                            </div>

                            <div class="control-group" :class="[errors.has('trollNum') ? 'has-error' : '']">
                                <label for="html_content">Troll-Free Number</label>
                                <input type="text" class="control" name="trollNum"
                                       placeholder="{{ __('Troll-Free Number') }}">{{ old('trollNum') }}
                            </div>

                            <div class="control-group" :class="[errors.has('localNum') ? 'has-error' : '']">
                                <label for="html_content">Local Number</label>
                                <input type="text" class="control" name="localNum"
                                       placeholder="{{ __('Local Number') }}">{{ old('localNum') }}
                            </div>

                            <div class="control-group">
                                <label for="html_content">Email Icon</label>
                                <i class="" id="icn"></i>
                                <input type="text" id="icons" class="control" name="emailIcon"
                                       placeholder="{{ __('Social Icon') }}">
                            </div>

                            <div class="control-group" :class="[errors.has('email') ? 'has-error' : '']">
                                <label for="html_content">Email</label>
                                <input type="email" class="control" name="email"
                                       placeholder="{{ __('Email') }}">{{ old('email') }}
                            </div>

                            <div class="control-group">
                                <label for="html_content">Adress Icon</label>
                                <i class="" id="icn"></i>
                                <input type="text" id="icons" class="control" name="addIcon"
                                       placeholder="{{ __('Address Icon') }}">
                            </div>

                            <div class="control-group" :class="[errors.has('address') ? 'has-error' : '']">
                                <label for="html_content">Address</label>
                                <input type="text" class="control" name="address"
                                       placeholder="{{ __('Address') }}">{{ old('address') }}
                            </div>

                            <div class="control-group">
                                <label for="html_content">Facebook Icon</label>
                                <i class="" id="icn"></i>
                                <input type="text" id="icons" class="control" name="faceIcon"
                                       placeholder="{{ __('Facebook Icon') }}">
                            </div>

                            <div class="control-group">
                                <label for="html_content">Facebook Link</label>
                                <input type="url" class="control" name="faceLink"
                                       placeholder="{{ __('Facebook Link') }}">
                            </div>

                            <div class="control-group">
                                <label for="html_content">Twitter Icon</label>
                                <i class="" id="icn"></i>
                                <input type="text" id="icons" class="control" name="twitIcon"
                                       placeholder="{{ __('Address Icon') }}">
                            </div>

                            <div class="control-group">
                                <label for="html_content">Twitter Link</label>
                                <input type="url" class="control" name="twitLink"
                                       placeholder="{{ __('Twitter Link') }}">
                            </div>

                            <div class="control-group">
                                <label for="html_content">Instagram Icon</label>
                                <i class="" id="icn"></i>
                                <input type="text" id="icons" class="control" name="instaIcon"
                                       placeholder="{{ __('Address Icon') }}">
                            </div>

                            <div class="control-group">
                                <label for="html_content">Instagram Link</label>
                                <input type="url" class="control" name="instaLink"
                                       placeholder="{{ __('Instagram Link') }}">
                            </div>

                            <div class="control-group">
                                <label for="html_content">Youtube Icon</label>
                                <i class="" id="icn"></i>
                                <input type="text" id="icons" class="control" name="youtIcon"
                                       placeholder="{{ __('Address Icon') }}">
                            </div>

                            <div class="control-group">
                                <label for="html_content">Youtube Link</label>
                                <input type="url" class="control" name="youtLink"
                                       placeholder="{{ __('Youtube Link') }}">
                            </div>

                            <div class="control-group" :class="[errors.has('copyRight') ? 'has-error' : '']">
                                <label for="html_content">Description</label>
                                <input type="text" class="control" name="copyRight">{{ old('copyRight') }}
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

                                <input type="text" class="control" name="url_key" v-validate="'required'"
                                       value="{{ old('url_key') }}"
                                       data-vv-as="&quot;{{ __('admin::app.cms.pages.url-key') }}&quot;" v-slugify>

                                <span class="control-error"
                                      v-if="errors.has('url_key')">@{{ errors.first('url_key') }}</span>
                            </div>

                            <div class="control-group">
                                <label for="meta_keywords">{{ __('admin::app.cms.pages.meta_keywords') }}</label>

                                <textarea type="text" class="control"
                                          name="meta_keywords">{{ old('meta_keywords') }}</textarea>
                            </div>

                            <div class="control-group">
                                <label for="meta_description">{{ __('admin::app.cms.pages.meta_description') }}</label>

                                <textarea type="text" class="control"
                                          name="meta_description">{{ old('meta_description') }}</textarea>

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
                valid_elements: '*[*]',
            });

            $(document).on("change", ".file_multi_video", function (evt) {
                var $source = $('#video_here');
                $source[0].src = URL.createObjectURL(this.files[0]);
                $source.parent()[0].load();
                $source.parent()[0].style.display = 'block';
            });

            $(document).on("change", ".file_multi_video1", function (evt) {
                var $source = $('#video_here1');
                $source[0].src = URL.createObjectURL(this.files[0]);
                $source.parent()[0].load();
                $source.parent()[0].style.display = 'block';
            });

            $("#icons").autocomplete({
                source: icons,
                select: function (event, ui) {
                    var label = ui.item.label;
                    var value = ui.item.value;
                    $('#icn').prop('class', value);
                }
            })

            $('#icons').on('change', function () {
                $('#icn').prop('class', $(this).val());
            })

        });

        function previewImage(event, previewId) {
            var preview = document.getElementById(previewId);
            preview.style.display = 'block';
            preview.src = URL.createObjectURL(event.target.files[0]);
        }
    </script>
@endpush
