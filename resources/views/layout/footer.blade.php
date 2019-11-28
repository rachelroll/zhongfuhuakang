<div class="container-fluid" style="background-color: #222222; height: 240px">
    <div class="container">
        @if(Agent::isDeskTop())
            <div class="row justify-content-between" style="color: #fff; position: relative">
            <div class="col-lg-auto mr-auto" style="position: absolute; bottom: -190px; left: 0px">
                <p>联系我们</p>
                <p style="color: #999; font-size: 16px">联系电话: 400-400-4000</p>
                <p style="color: #999; font-size: 16px">地址: 北京市朝阳区大成国际 B 座 0526 室</p>
            </div>
            <div class="col-lg-auto" style="position: absolute; bottom: -190px; right: 0">
                <p>Copyright ©北京中福华康农业发展有限公司 粤ICP备14063903号</p>
            </div>
        </div>
        @else
            <div class="row justify-content-between" style="color: #fff; padding-top: 40px">
                <div class="col-12 mr-auto">
                    <p>联系我们</p>
                    <p style="color: #999; font-size: 16px">联系电话: 400-400-4000</p>
                    <p style="color: #999; font-size: 16px">地址: 北京市朝阳区大成国际 B 座 0526 室</p>
                </div>
                <div class="col-12">
                    <p>Copyright ©北京中福华康农业发展有限公司 粤ICP备14063903号</p>
                </div>
            </div>
        @endif
    </div>
</div>

