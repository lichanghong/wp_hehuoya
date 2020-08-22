# iOS打包脚本管理规范

## 分支管理

:point_down: 

- 正式环境使用master分支管理，不允许直接在master分支修改任何代码
- 测试环境使用develop分支管理，在做调试时先同步master分支代码
- :warning:当多人在develop分支进行功能开发调试时，调试完成及时合并到master，如果暂时还不能上线，自测完成之后把自己修改的代码单拉出来分支进行代码保存，develop分支的改动恢复到修改之前
- :tada:时刻保证develop可以向master提merge request


## 插入 vuep

?> 这里演示的是`Vue`单文件组件的三部分内容都有的情况，自定义主题色，注意下方直接演示了Vue组件的效果

<vuep template="#custom-variables"></vuep>

<script v-pre type="text/x-template" id="custom-variables">
<style>
  /* global custom-variables */
  /* :root {
    --r: 51;
    --g: 51;
    --b: 51;
  } */
  main {
    width: 100%;
    padding: 60px 29px;
    display: flex;
    flex-direction: column;
    align-items: center;
  }
  label {
    display: flex;
    align-items: center;
  }
  input {
    padding: 0;
    width: 29px;
    height: 29px;
  }
  div.variables-block {
    width: 100%;
    display: flex;
    justify-content: center;
    margin-top: 29px;
  }
  /* 局部 custom-variables */
  div.variables-block > div {
    --r: 51;
    --g: 51;
    --b: 51;
  }
  div.variables-block > div::after {
    content: "";
    display: inline-block;
    width: 52px;
    height: 52px;
    background: rgb(var(--r), var(--g), var(--b));
  }
</style>
<template>
  <main>
    <label for="color">
      请选择主题色：
      <input
        type="color"
        v-model="value"
        id="color"
      />
    </label>
    <div class="variables-block">
      <div
        v-for="(ele, idx) in colorList"
        :ref="'variable' + idx">
      </div>
    </div>
  </main>
</template>
<script>
  const Color = require('./libs/color.js');
  const INITIAL_COLOR = '#b4a078';
  export default {
    data() {
      return {
        value: INITIAL_COLOR,
      }
    },
    computed: {
      colorList() {
        const mainColor = this.value.length === 7 && this.value || INITIAL_COLOR;
        return this.getColorList(mainColor);
      }
    },
    methods: {
      getColorList(val) {
        const color = Color(val);
        return Array.from({length: 10}).map((v, i) => {
          let rgb = color.mix(Color('white'), i / 10);
          this.$nextTick(() => {
            const style = this.$refs[`variable${i}`][0].style;
            style.setProperty('--r', rgb.red());
            style.setProperty('--g', rgb.green());
            style.setProperty('--b', rgb.blue());
          })
        });
      }
    }
  }
</script>
</script>

## 插入 iframe

<iframe
  width="100%"
  height="800px"
  frameborder="0"
  src="docs/third.html">
</iframe>