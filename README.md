## 环境
### php7+

## 设计模式
### 1 简单工厂模式
    测试：php single_factory/test.php
    场景：
    1）多种支付场景，支付宝、微信、银行卡等等
    优点：
    1）工厂类中包含逻辑判断，去除与客户端依赖
    说明：
    1）内部逻辑判断在工厂类中实现
    2）增加产品时需增加工厂类内部逻辑判断
### 2 工厂方法模式
    测试：php factory_method/test.php
    优点：
    1）遵守开放-封闭原则，可扩展，不修改
    说明：
    1）内部逻辑判断在客户端实现
    2）增加产品时需增加工厂子类
    3）工厂模式一般配合反射使用，不用进行条件判断
### 3 抽象工厂模式    
    测试：php abstract_factory/test.php
    工厂方法与抽象工厂区别：
    1）工厂方法模式只有一个抽象产品类，而抽象工厂模式有多个
    2）工厂方法模式的具体工厂类只能创建一个具体产品类的实例，而抽象工厂模式可以创建多个
    工厂方法模式：
    一个抽象产品类，可以派生出多个具体产品类
    一个抽象工厂类，可以派生出多个具体工厂类
    每个具体工厂类只能创建一个具体产品类的实例
    抽象工厂模式：
    多个抽象产品类，每个抽象产品类可以派生出多个具体产品类
    一个抽象工厂类，可以派生出多个具体工厂类
    每个具体工厂类可以创建多个具体产品类的实例
### 4 策略模式
    测试：php strategy/test.php
    场景：
    1）商品活动促销，打几折、满减
    优点：
    1）策略选取由客户端承担，并转给Context对象实现，减轻客户端职责
    说明：
    1）必须有Context类，通过构造函数参数传递的类型生成具体的算法
    2）如果想去除Context中的switch，可配合反射，不用进行条件判断
    3）策略模式用来封装算法，可以用来封装几乎任何类型的规则
### 5 装饰模式
    测试：php decorator/test.php
    场景：
    1）服饰系统QQ秀
    优点：
    1）可以在原来功能上动态添加新功能
    2）分离核心功能与装饰功能，装饰类不会增加核心类的复杂度
    说明：
    1）装饰类是在已有类上增加新功能
    2）装饰类一般为了满足特定某种特定情况下才会执行的行为的需要
    3）装饰模式的装饰顺序很重要，最好保证装饰类间彼此独立
### 6 代理模式
    测试：php proxy/test.php
    场景：
    1）当对象需要有不同权限时，用来控制对真实对象访问时的权限
    2）在调用真实对象时，额外做其他事
    优点：
    1）可以为不同代理分配不同的权限，且不用知道真实对象
    说明：
    1）代理是控制对真实对象的访问
### 7 原型模式 （原型类声明一个克隆自身的接口）
    测试：php prototype/test.php
    场景：
    1）需要深复制或浅复制场合（浅复制对对象只是复制引用，还是指向原有对象。深复制把引用对象的变量指向复制过的新对象，而不是原有的被引用的对象）    
    说明：
    1）从一个对象再创建一个可定制的对象，而不需要知道任何创建的细节
    2）不用重新初始化对象，而是动态的获得对象运行时的状态
### 8 模版方法模式
    测试：php template_method/test.php
    场景：
    1）考试试卷与答案，试卷应提取为模版
    优点：
    1）通过把不变行为搬移到超类，去除子类中的重复代码
    说明：
    1）模版方法模式是定义一个操作中的算法的骨架，而将具体步骤延迟到子类中实现
### 9 外观模式
    测试：php facade/test.php
    场景：
    1）设计初期，对系统进行分层，如MVC架构
    2）开发阶段，子系统越来越复杂，增加外观可以提供一个简单的接口，减少依赖
    3）维护遗留大型系统，该系统可能难以维护及扩展。增加新需求可以增加外观与遗留代码交互所有复杂的工作
    说明：
    1）外观模式为子系统的一组接口提供一个一致的界面，此模式定义了一个高层接口，这个接口使得子系统容易使用 
### 10 建造者模式
    测试：php builder/test.php
    场景：
    1）用于创建一些复杂的对象，这些对象内部构建间的建造顺序通常是稳定的，但对象内部的构建通常面临复杂的变化
    优点：
    1）使建造代码与表示代码分离，由于建造者隐藏了该产品是如何组装的，所以若需要改变一个产品的内部表示，只需要再定义一个具体的建造者就可以
    说明：
    1）建造者模式是在当创建复杂对象的算法应该独立于该对象的组成部分以及它们的装配方式时适用的模式   
### 11 观察者模式（发布-订阅模式）
    测试：php observer/test.php
    场景：
    1）当一个对象的改变需要同时改变其他多个对象时候
    说明：
    1）观察者模式定义了一种一对多依赖关系，让多个观察者对象同时监听某一个主题对象
    2）一般用事件委托方式改进观察者模式，观察者方法名可自定义，但必须具有相同的参数列表和返回值类型 
### 12 状态模式
    测试：php state/test.php
    场景：
    1）一个对象的行为取决于它的状态，状态的变化都是依靠大量的多分支判断语句来实现，每种状态可定义为一个State的子类
    说明：
    1）状态模式主要解决的是当控制一个对象状态转换的条件表达式过于复杂的情况
    2）把状态的判断逻辑转移到表示不同状态的一系列类中，可以把复杂的判断逻辑简化    
## 设计原则
### 1 单一职责原则
    解释：就一个类而言，应该仅有一个引起它变化的原因
    场景：
    1）方块游戏，应把游戏逻辑与界面显示分离出来
### 2 开放封闭原则
    解释：软件实体（类、模块、函数）对扩展开放，对修改封闭
    场景：
    1）当可能发送变化时，创建一个抽象类，不会更改现有的代码，最好在变化发送时创建
    2）工厂方法模式遵守开放封闭原则
### 3 依赖倒转原则
    解释：高层模块不应该依赖低层模块，两个都应该依赖抽象。
    针对接口编程，而非实现，程序中所有的依赖关系都是终止于抽象类或接口
    场景：
    1）使用多种数据库，model顶层都应该抽象为接口，每种数据库各自实现接口
### 4 迪米特法则
    解释：每一个类都应当尽量降低成员的访问权限

    