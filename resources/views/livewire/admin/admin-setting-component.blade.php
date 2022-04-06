<div dir="rtl" style="text-align: right">
    <title>@section('title',' الأعدادات |')</title>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading ">
                        <h4>{{__('mshmk.Settings')}}</h4>
                    </div>
                    <div class="panel-body">
                        @if(Session::has('message'))
                            <div class="alert alert-success" role="alert">{{ Session::get('message')}}</div>
                        @endif
                        <form class="form-horizontal"  enctype="multipart/form-data" wire:submit.prevent='savesettings'>
                            @csrf
                            <div class="form-group">
                                <label class="col-md-4 control-label">{{__('mshmk.store_currency')}}</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="{{__('mshmk.store_currency')}}" class="form-control input-md" wire:model='currency'>
                                    @error('store_currency') <p class="text-danger">{{$message}}</p>@enderror
                                </div>
                            </div>
{{--------------------------------- contact us تواصل معنا --------------------------------------}}
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-md-6 pull-right">
                                            <h4>{{__('mshmk.edit_contact_us')}}</h4> 
                                            </div>
                                            
                                        </div>    
                                    </div>    
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label">{{__('mshmk.Email')}}</label>
                                    <div class="col-md-4">
                                        <input type="email" placeholder="{{__('mshmk.Email')}}" class="form-control input-md" wire:model='email'>
                                        @error('email') <p class="text-danger">{{$message}}</p>@enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label">{{__('mshmk.Phone')}}</label>
                                    <div class="col-md-4">
                                        <input type="text" placeholder="{{__('mshmk.Phone')}}" class="form-control input-md" wire:model='phone'>
                                        @error('Phone') <p class="text-danger">{{$message}}</p>@enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label">{{__('mshmk.Phone_2')}}</label>
                                    <div class="col-md-4">
                                        <input type="text" placeholder="{{__('mshmk.Phone_2')}}" class="form-control input-md" wire:model='phone2'>
                                        @error('Phone2') <p class="text-danger">{{$message}}</p>@enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label">{{__('mshmk.Address')}}</label>
                                    <div class="col-md-4">
                                        <input type="text" placeholder="{{__('mshmk.Address')}}" class="form-control input-md" wire:model='address'>
                                        @error('email') <p class="text-danger">{{$message}}</p>@enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label">{{__('mshmk.Map')}}</label>
                                    <div class="col-md-4">
                                        <input type="text" placeholder="{{__('mshmk.Map')}}" class="form-control input-md" wire:model='map'>
                                        @error('email') <p class="text-danger">{{$message}}</p>@enderror
                                    </div>
                                </div>
{{--------------------------------- contact us تواصل معنا --------------------------------------}}
{{---------------------------------fixed_pages الصفحات الثابتة--------------------------------------}}
                           
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-md-6 pull-right">
                                          <h4 >{{__('mshmk.edit_pages')}}</h4> 
                                        </div>
                                        
                                    </div>    
                                </div>    
                            </div>
                            <div class="form-group">

                                <label class="col-md-4 control-label">{{__('mshmk.about_shop_page_body')}}</label>
                                <div class="col-md-4">
                                    <textarea type="text" placeholder="{{__('mshmk.about_shop_page_body')}}" class="form-control input-md" wire:model='about_shop_page_body' id="about_shop_page_body"></textarea>
                                    @error('about_shop_page_body') <p class="text-danger">{{$message}}</p>@enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">{{__('mshmk.terms_page_body')}}</label>
                                <div class="col-md-4">
                                    <textarea type="text" placeholder="{{__('mshmk.terms_page_body')}}" class="form-control input-md" wire:model='terms_page_body' id="terms_page_body" ></textarea>
                                    @error('terms_page_body') <p class="text-danger">{{$message}}</p>@enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">{{__('mshmk.about_privacy_body')}}</label>
                                <div class="col-md-4">
                                    <textarea type="text" placeholder="{{__('mshmk.about_privacy_body')}}" class="form-control input-md" wire:model='about_privacy_body'  id="about_privacy_body"></textarea>
                                    @error('about_privacy_body') <p class="text-danger">{{$message}}</p>@enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">{{__('mshmk.about_return_body')}}</label>
                                <div class="col-md-4">
                                    <textarea type="text" placeholder="{{__('mshmk.about_return_body')}}" class="form-control input-md" wire:model='about_return_body'  id="about_return_body"></textarea>
                                    @error('about_return_body') <p class="text-danger">{{$message}}</p>@enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">{{__('mshmk.about_faq_body')}}</label>
                                <div class="col-md-4">
                                    <textarea type="text" placeholder="{{__('mshmk.about_faq_body')}}" class="form-control input-md" wire:model='about_faq_body'  id="about_faq_body"></textarea>
                                </div>
                            </div>
{{--------------------------------- fixed_pages الصفحات الثابتة--------------------------------------}}


{{---------------------------------  قسم تغيير مميزات المتجر  --------------------------------------}}
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-md-6 pull-right">
                                        <h4 >{{__('mshmk.edit_icons')}}</h4> 
                                        </div>
                                        
                                    </div>    
                                </div>    
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">{{__('mshmk.section_1_icon')}}</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="{{__('mshmk.section_1_icon-text')}}" class="form-control input-md" wire:model='section_1_icon'>
                                    @error('section_1_icon') <p class="text-danger">{{$message}}</p>@enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">{{__('mshmk.section_1_title')}}</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="{{__('mshmk.section_1_title')}}" class="form-control input-md" wire:model='section_1_title'>
                                    @error('section_1_title') <p class="text-danger">{{$message}}</p>@enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">{{__('mshmk.section_1_subtitle')}}</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="{{__('mshmk.section_1_subtitle')}}" class="form-control input-md" wire:model='section_1_subtitle'>
                                    @error('section_1_subtitle') <p class="text-danger">{{$message}}</p>@enderror
                                </div>
                            </div>

                            <hr>
                            <div class="form-group">
                                <label class="col-md-4 control-label">{{__('mshmk.section_2_icon')}}</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="{{__('mshmk.section_2_icon-text')}}" class="form-control input-md" wire:model='section_2_icon'>
                                    @error('section_2_icon') <p class="text-danger">{{$message}}</p>@enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">{{__('mshmk.section_2_title')}}</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="{{__('mshmk.section_2_title')}}" class="form-control input-md" wire:model='section_2_title'>
                                    @error('section_2_title') <p class="text-danger">{{$message}}</p>@enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">{{__('mshmk.section_2_subtitle')}}</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="{{__('mshmk.section_2_subtitle')}}" class="form-control input-md" wire:model='section_2_subtitle'>
                                    @error('section_2_subtitle') <p class="text-danger">{{$message}}</p>@enderror
                                </div>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label class="col-md-4 control-label">{{__('mshmk.section_3_icon')}}</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="{{__('mshmk.section_3_icon-text')}}" class="form-control input-md" wire:model='section_3_icon'>
                                    @error('section_3_icon') <p class="text-danger">{{$message}}</p>@enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">{{__('mshmk.section_3_title')}}</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="{{__('mshmk.section_3_title')}}" class="form-control input-md" wire:model='section_3_title'>
                                    @error('section_3_title') <p class="text-danger">{{$message}}</p>@enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">{{__('mshmk.section_3_subtitle')}}</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="{{__('mshmk.section_3_subtitle')}}" class="form-control input-md" wire:model='section_3_subtitle'>
                                    @error('section_3_subtitle') <p class="text-danger">{{$message}}</p>@enderror
                                </div>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label class="col-md-4 control-label">{{__('mshmk.section_4_icon')}}</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="{{__('mshmk.section_4_icon-text')}}" class="form-control input-md" wire:model='section_4_icon'>
                                    @error('section_4_icon') <p class="text-danger">{{$message}}</p>@enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">{{__('mshmk.section_4_title')}}</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="{{__('mshmk.section_4_title')}}" class="form-control input-md" wire:model='section_4_title'>
                                    @error('section_4_title') <p class="text-danger">{{$message}}</p>@enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">{{__('mshmk.section_4_subtitle')}}</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="{{__('mshmk.section_4_subtitle')}}" class="form-control input-md" wire:model='section_4_subtitle'>
                                    @error('section_4_subtitle') <p class="text-danger">{{$message}}</p>@enderror
                                </div>
                            </div>

                            <hr>
{{---------------------------------  الفوتور يبدأ من هنا --------------------------------------}}

{{----------------------------------------------------حقوق الملكية----------------------------------------------------------------------------}}
                            <div class="form-group">
                            <label class="col-md-4 control-label">{{__('mshmk.copyright')}}</label>
                            <div class="col-md-4">
                                <input type="text" placeholder="{{__('mshmk.copyright')}}" class="form-control input-md" wire:model='copyright'>
                                @error('copyright') <p class="text-danger">{{$message}}</p>@enderror
                            </div>
                            </div>

                           
{{----------------------------------------------------حقوق الملكية----------------------------------------------------------------------------}}

{{----------------------------------------------------App Download Link روابط تحميل التطبيق----------------------------------------------------------------------------}}
                        <div class="form-group">
                            <label class="col-md-4 control-label">{{__('mshmk.download_app_link_1')}}</label>
                            <div class="col-md-4">
                                <input type="text" placeholder="{{__('mshmk.download_app_link_1')}}" class="form-control input-md" wire:model='download_app_link_1'>
                                @error('download_app_link_1') <p class="text-danger">{{$message}}</p>@enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">{{__('mshmk.download_app_link_2')}}</label>
                            <div class="col-md-4">
                                <input type="text" placeholder="{{__('mshmk.download_app_link_2')}}" class="form-control input-md" wire:model='download_app_link_2'>
                                @error('download_app_link_2') <p class="text-danger">{{$message}}</p>@enderror
                            </div>
                        </div>
{{----------------------------------------------------App Download Link روابط تحميل التطبيق----------------------------------------------------------------------------}}

{{---------------------------------التواصل الأجتماعي--------------------------------------}}
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-md-6 pull-right">
                                        <h4 >{{__('mshmk.social_links')}}</h4> 
                                        </div>
                                        
                                    </div>    
                                </div>    
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">{{__('mshmk.Twitter')}}</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="{{__('mshmk.Twitter')}}" class="form-control input-md" wire:model='twiter'>
                                    @error('email') <p class="text-danger">{{$message}}</p>@enderror
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="col-md-4 control-label">{{__('mshmk.FaceBook')}}</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="{{__('mshmk.FaceBook')}}" class="form-control input-md" wire:model='facebook'>
                                    @error('email') <p class="text-danger">{{$message}}</p>@enderror
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="col-md-4 control-label">{{__('mshmk.Pinterest')}}</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="{{__('mshmk.Pinterest')}}" class="form-control input-md" wire:model='pinterest'>
                                    @error('email') <p class="text-danger">{{$message}}</p>@enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">{{__('mshmk.Instagram')}}</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="{{__('mshmk.Instagram')}}" class="form-control input-md" wire:model='instagram'>
                                    @error('email') <p class="text-danger">{{$message}}</p>@enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">{{__('mshmk.Youtube')}}</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="{{__('mshmk.Youtube')}}" class="form-control input-md" wire:model='youtube'>
                                    @error('email') <p class="text-danger">{{$message}}</p>@enderror
                                </div>
                            </div>
{{---------------------------------التواصل الأجتماعي--------------------------------------}}
                            <div class="form-group">
                                <label class="col-md-4 control-label"></label>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">{{__('mshmk.Save')}}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
