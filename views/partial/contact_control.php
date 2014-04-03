<div class="contact-control">
    <div class="pure-form search-container pull-right">
        <div class="form-fields">
            <input type="text" name="key" class="input-keyword" placeholder="输入要搜索的人名"/>
        </div>
        <button class="pure-button pure-button-primary btn-search">搜索</button>
    </div>
    <!-- <div class="clearfix"></div> -->

    <button class="pure-button pure-button-primary btn-toggle-container">我要 添加/修改 通讯录</button>
    <div class="new-contact-container hide">
        <h3>添加/修改通讯录</h3>
        <div class="pure-form pure-form-aligned">
            <div class="pure-control-group">
                <label for="name">姓名</label>
                <input class="pure-input-2-3" type="text" name="name" placeholder="如果有同名则更新"/>
            </div>
            <div class="pure-control-group">
                <label for="sex">性别</label>
                <select name="sex" class="pure-input-2-3">
                    <option value="male">男</option>
                    <option value="female">女</option>
                </select>
            </div>
            <div class="pure-control-group">
                <label for="name">年级</label>
                <input class="pure-input-2-3" type="text" name="grade" placeholder=""/>
            </div>
            <div class="pure-control-group">
                <label for="tel">电话</label>
                <input class="pure-input-2-3" type="text" name="tel" placeholder=""/>
            </div>
            <div class="pure-control-group">
                <label for="qq">QQ</label>
                <input class="pure-input-2-3" type="text" name="qq" placeholder=""/>
            </div>
            <div class="pure-control-group">
                <label for="email">邮箱</label>
                <input class="pure-input-2-3" type="text" name="email" placeholder=""/>
            </div>
        </div>
        <div class="button-container">
            <button class="pure-button pure-button-primary btn-insert">提交</button>
        </div>
    </div>
</div>