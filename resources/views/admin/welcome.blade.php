@extends('layouts.AdminFrame')

@section('content')
    <div class="">
        <div data-module="firstlevel" class="am-animation-slide-left">
            <!-- <div class="am-container"> -->
            <div class="am-g">
                <div class="am-u-md-6">
                    <div class="am-panel am-panel-default">
                        <div class="am-panel-hd">
                            <h4 class="am-panel-title" data-am-collapse="{ target: '#base'}">
                               学校统计
                            </h4>
                        </div>
                        <div id="base" class="am-panel-collapse am-collapse am-in">
                            <div class="am-panel-bd">
                                <div id="basic-main-content" render="true" ></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="am-u-md-6">
                    <div class="am-panel am-panel-default">
                        <div class="am-panel-hd">
                            <h4 class="am-panel-title" data-am-collapse="{ target: '#type'}">
                                广告投放
                            </h4>
                        </div>
                        <div id="type" class="am-panel-collapse am-collapse am-in">
                            <div class="am-panel-bd">
                                <div id="type-main-content" render="true" ></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="am-g">
                <div class="am-u-md-6">
                    <div class="am-panel am-panel-default">
                        <div class="am-panel-hd">
                            <h4 class="am-panel-title" data-am-collapse="{ target: '#statistics'}">
                                学生统计
                            </h4>
                        </div>
                        <div id="statistics" class="am-panel-collapse am-collapse am-in">
                            <div class="am-panel-bd">
                                <div id="statistics-main-content" render="true" ></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="am-u-md-6">
                    <div class="am-panel am-panel-default">
                        <div class="am-panel-hd">
                            <h4 class="am-panel-title" data-am-collapse="{ target: '#expend'}">
                                最新文章
                            </h4>
                        </div>
                        <div id="expend" class="am-panel-collapse am-collapse am-in">
                            <div class="am-panel-bd">
                                <div id="expend-main-content" render="true" ></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr/>
            <div class="am-g">
                <div class="am-u-md-12">
                    <div class="am-panel am-panel-default">
                        <div class="am-panel-hd">
                            <h4 class="am-panel-title" data-am-collapse="{ target: '#combo'}">
                                最新文章
                            </h4>
                        </div>
                        <div id="combo" class="am-panel-collapse am-collapse am-in">
                            <div class="am-panel-bd">
                                <div id="combo-main-content"  render="true"></div>
                                <hr />
                                <div id="combo-main-echarts"  render="true" ></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--am-hide -->
        <div data-module="secondlevel" class="am-animation-slide-right am-hide">
            <div class="am-cf am-padding">
                <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">细节报表 - </strong><small>场景xxx</small></div>
            </div>

            <div class="am-g">
                <div class="am-u-md-12">
                    <div class="am-panel am-panel-default">
                        <div class="am-panel-hd">
                            <h4 class="am-panel-title" data-am-collapse="{ target: '#detail'}">
                              访问管理
                            </h4>
                        </div>
                        <div id="detail" class="am-panel-collapse am-collapse am-in">
                            <div class="am-panel-bd">
                                <div id="detail-main-content"  render="true"></div>
                                <hr />
                                <div id="detail-main-echarts"  render="true" ></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
@section('js')
<script src="{{ asset("adminframe/admin/welcome/js/amazeui.min.js") }}"></script>
<script src="{{ asset("adminframe/admin/welcome/js/echarts.min.js") }}"></script>
<script src="{{ asset("adminframe/admin/welcome/js/t3.min.js") }}"></script>
<script src="{{ asset("adminframe/admin/welcome/js/welcome.min.js") }}"></script>
<script type="text/javascript">
    Box.Application.init();
</script>
@endsection