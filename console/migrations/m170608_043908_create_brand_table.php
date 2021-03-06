<?php

use yii\db\Migration;

/**
 * Handles the creation of table `brand`.
 */
class m170608_043908_create_brand_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('brand', [
            'id' => $this->primaryKey()->notNull(),
            'name' => $this->string(50)->notNull()->comment('名称'),
            'intro' => $this->text()->notNull()->comment('简介'),
            'logo' => $this->string(255)->notNull()->comment('LOGO图片'),
            'sort' => $this->integer(11)->notNull()->comment('排序'),
            'status' => $this->integer(2)->notNull()->comment('状态-1删除0隐藏1正常'),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('brand');
    }
}
