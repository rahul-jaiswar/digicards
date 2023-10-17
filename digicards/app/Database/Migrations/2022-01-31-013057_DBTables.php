<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DBTables extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'users_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'userType' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'userUID' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'firstname' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'lastname' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'user_dob' => [
                'type' => 'DATE',
                'null' => true,
            ],
            'gender' => [
                'type' => 'ENUM',
                'constraint' => ['Male', 'Female'],
                'null' => true,
            ],
            'username' => [
                'type' => 'VARCHAR',
                'constraint' => '225',
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => '225',
            ],
            'email_status' => [
                'type' => 'INT',
                'null' => true,
            ],
            'email_otp' => [
                'type' => 'INT',
                'null' => true,
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => '225',
                'null' => true,
            ],
            'mobile_no' => [
                'type' => 'VARCHAR',
                'constraint' => '11',
                'null' => true,
            ],
            'landline' => [
                'type' => 'VARCHAR',
                'constraint' => '11',
                'null' => true,
            ],
            'company_name' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'company_code' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'company_email' => [
                'type' => 'VARCHAR',
                'constraint' => '225',
            ],
            'contact_partner' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'primary_contact' => [
                'type' => 'VARCHAR',
                'constraint' => '11',
                'null' => true,
            ],
            'country' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'address' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'pincode' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'state' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'city' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'area_name' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'PAN_no' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'STN_no' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'GST_no' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'office_longitutde' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'office_latitutde' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'map_link' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'enable' => [
                'type' => 'INT',
                'null' => true,
            ],
            'created_at' => [
                'type' => 'TIMESTAMP',
            ],
            'updated_at' => [
                'type' => 'DATETIME',
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
            ],
        ]);
        $this->forge->addKey('users_id', true);
        $this->forge->createTable('user_tb');

        $this->forge->addField([
            'roles_id' => [
                'type'           => 'INT',
                'auto_increment' => true,
            ],
            'role_name' => [
                'type' => 'TEXT',
            ],
            'enable' => [
                'type' => 'INT',
            ],
            'created_at' => [
                'type' => 'TIMESTAMP',
            ],
            'updated_at' => [
                'type' => 'DATETIME',
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
            ],
        ]);
        $this->forge->addKey('roles_id', true);
        $this->forge->createTable('roles_tb');

        $this->forge->addField([
            'permission_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'userUID' => [
                'type' => 'TEXT',
            ],
            'module_id' => [
                'type' => 'TEXT',
            ],
            'userUID' => [
                'type' => 'TEXT',
            ],
            'enable' => [
                'type' => 'INT',
                'null' => true,
            ],
            'created_at' => [
                'type' => 'TIMESTAMP',
            ],
            'updated_at' => [
                'type' => 'DATETIME',
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
            ],
        ]);
        $this->forge->addKey('permission_id', true);
        $this->forge->createTable('permission_tb');

        $this->forge->addField([
            'sub_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'sub_cat' => [
                'type' => 'TEXT',
            ],
            'sub_name' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'label_status' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'label_name' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'discounted_price' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'price' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'enable' => [
                'type' => 'INT',
                'null' => true,
            ],
            'created_at' => [
                'type' => 'TIMESTAMP',
            ],
            'updated_at' => [
                'type' => 'DATETIME',
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
            ],
        ]);
        $this->forge->addKey('sub_id', true);
        $this->forge->createTable('subscription_tb');

        $this->forge->addField([
            'cust_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'company_code' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'profile_image' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'lead_channel' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'firstname' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'lastname' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'username' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'company_cat' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'company_name' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'company_url' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'email_otp' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'mobile_no' => [
                'type' => 'VARCHAR',
                'constraint' => '11',
                'null' => true,
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
                'null' => false,
            ],
            'enable' => [
                'type' => 'INT',
                'null' => true,
            ],
            'created_at' => [
                'type' => 'TIMESTAMP',
            ],
            'updated_at' => [
                'type' => 'DATETIME',
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
            ],
        ]);
        $this->forge->addKey('cust_id', true);
        $this->forge->createTable('customer_tb');

        $this->forge->addField([
            'card_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'company_code' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'company_name' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'company_cat' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'est_date' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'PAN_no' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'STN_no' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'GST_no' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'cust_copyright' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'company_logo' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'company_email' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'support_email' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'sup_contact_no' => [
                'type' => 'VARCHAR',
                'constraint' => '11',
                'null' => true,
            ],
            'whatsapp_business' => [
                'type' => 'VARCHAR',
                'constraint' => '11',
                'null' => true,
            ],
            'website_url' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'company_map_link' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'intro_video' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'portfolio_pdf' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'catalogue_pdf' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'about_us' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'country' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'state' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'city' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'pincode' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'address' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'office_longitutde' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'office_latitutde' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'map_link' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'enable' => [
                'type' => 'INT',
                'null' => true,
            ],
            'created_at' => [
                'type' => 'TIMESTAMP',
            ],
            'updated_at' => [
                'type' => 'DATETIME',
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
            ],
        ]);
        $this->forge->addKey('card_id', true);
        $this->forge->createTable('card_info_tb');

        $this->forge->addField([
            'ctemp_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'company_code' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'temp_name' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'temp_cat' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'enable' => [
                'type' => 'INT',
                'null' => true,
            ],
            'created_at' => [
                'type' => 'TIMESTAMP',
            ],
            'updated_at' => [
                'type' => 'DATETIME',
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
            ],
        ]);
        $this->forge->addKey('ctemp_id', true);
        $this->forge->createTable('card_template_tb');

        $this->forge->addField([
            'tcat_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'company_name' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'tcat_name' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'enable' => [
                'type' => 'INT',
                'null' => true,
            ],
            'created_at' => [
                'type' => 'TIMESTAMP',
            ],
            'updated_at' => [
                'type' => 'DATETIME',
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
            ],
        ]);
        $this->forge->addKey('tcat_id', true);
        $this->forge->createTable('team_cat_tb');

        $this->forge->addField([
            'tdcat_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'company_name' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'tdesignation_name' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'enable' => [
                'type' => 'INT',
                'null' => true,
            ],
            'created_at' => [
                'type' => 'TIMESTAMP',
            ],
            'updated_at' => [
                'type' => 'DATETIME',
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
            ],
        ]);
        $this->forge->addKey('tdcat_id', true);
        $this->forge->createTable('team_designation_tb');

        $this->forge->addField([
            'cteam_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'company_code' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'company_name' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'team_name' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'designation' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'card_category' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'userUID' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'firstname' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'lastname' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'username' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'email_otp' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'mobile_no' => [
                'type' => 'VARCHAR',
                'constraint' => '11',
                'null' => true,
            ],
            'team_password' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'profile_image' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'whatsapp_business' => [
                'type' => 'VARCHAR',
                'constraint' => '11',
                'null' => true,
            ],
            'alternate_no' => [
                'type' => 'VARCHAR',
                'constraint' => '11',
                'null' => true,
            ],
            'about' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'enable' => [
                'type' => 'INT',
                'null' => true,
            ],
            'created_at' => [
                'type' => 'TIMESTAMP',
            ],
            'updated_at' => [
                'type' => 'DATETIME',
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
            ],
        ]);
        $this->forge->addKey('cteam_id', true);
        $this->forge->createTable('card_team_tb');

        $this->forge->addField([
            'schannel_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'channel_name' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'enable' => [
                'type' => 'INT',
                'null' => true,
            ],
            'created_at' => [
                'type' => 'TIMESTAMP',
            ],
            'updated_at' => [
                'type' => 'DATETIME',
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
            ],
        ]);
        $this->forge->addKey('schannel_id', true);
        $this->forge->createTable('social_channel_tb');

        $this->forge->addField([
            'social_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'icon_img' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'company_code' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'company_name' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'channel_name' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'channel_url' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'icon_visibility' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'enable' => [
                'type' => 'INT',
                'null' => true,
            ],
            'created_at' => [
                'type' => 'TIMESTAMP',
            ],
            'updated_at' => [
                'type' => 'DATETIME',
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
            ],
        ]);
        $this->forge->addKey('social_id', true);
        $this->forge->createTable('card_social_link_tb');

        $this->forge->addField([
            'pcategory_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'company_code' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'category_name' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'enable' => [
                'type' => 'INT',
                'default' => 1,
            ],
            'created_at' => [
                'type' => 'TIMESTAMP',
            ],
            'updated_at' => [
                'type' => 'DATETIME',
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
            ],
        ]);
        $this->forge->addKey('pcategory_id', true);
        $this->forge->createTable('product_category_tb');

        $this->forge->addField([
            'cproduct_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'company_code' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'company_name' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'list_view' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'category_name' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'position' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'pname' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'pdetails' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'pprice' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'product_img' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'description' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'enable' => [
                'type' => 'INT',
                'null' => true,
            ],
            'created_at' => [
                'type' => 'TIMESTAMP',
            ],
            'updated_at' => [
                'type' => 'DATETIME',
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
            ],
        ]);
        $this->forge->addKey('cproduct_id', true);
        $this->forge->createTable('card_product_tb');

        $this->forge->addField([
            'scategory_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'company_name' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'scategory_name' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'enable' => [
                'type' => 'INT',
                'null' => true,
            ],
            'created_at' => [
                'type' => 'TIMESTAMP',
            ],
            'updated_at' => [
                'type' => 'DATETIME',
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
            ],
        ]);
        $this->forge->addKey('scategory_id', true);
        $this->forge->createTable('service_category_tb');

        $this->forge->addField([
            'service_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'company_code' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'company_name' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'scategory_name' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'availablity' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'position' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'sname' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'sdetails' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'sprice' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'service_img' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'about_service' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'enable' => [
                'type' => 'INT',
                'null' => true,
            ],
            'created_at' => [
                'type' => 'TIMESTAMP',
            ],
            'updated_at' => [
                'type' => 'DATETIME',
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
            ],
        ]);
        $this->forge->addKey('service_id', true);
        $this->forge->createTable('card_service_tb');

        $this->forge->addField([
            'ccategory_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'company_name' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'ccategory_name' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'enable' => [
                'type' => 'INT',
                'null' => true,
            ],
            'created_at' => [
                'type' => 'TIMESTAMP',
            ],
            'updated_at' => [
                'type' => 'DATETIME',
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
            ],
        ]);
        $this->forge->addKey('ccategory_id', true);
        $this->forge->createTable('catalogue_category_tb');

        $this->forge->addField([
            'ccharac_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'company_name' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'cchar_name' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'enable' => [
                'type' => 'INT',
                'null' => true,
            ],
            'created_at' => [
                'type' => 'TIMESTAMP',
            ],
            'updated_at' => [
                'type' => 'DATETIME',
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
            ],
        ]);
        $this->forge->addKey('ccharac_id', true);
        $this->forge->createTable('catalogue_charac_tb');

        $this->forge->addField([
            'catalogue_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'company_code' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'company_name' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'ccategory_name' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'clist_view' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'position' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'cname' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'cdetails' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'cprice' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'catalogue_img' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'characteristcs' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'enable' => [
                'type' => 'INT',
                'null' => true,
            ],
            'created_at' => [
                'type' => 'TIMESTAMP',
            ],
            'updated_at' => [
                'type' => 'DATETIME',
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
            ],
        ]);
        $this->forge->addKey('catalogue_id', true);
        $this->forge->createTable('card_catalogue_tb');

        $this->forge->addField([
            'cgallery_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'company_code' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'company_name' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'image_name' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'enable' => [
                'type' => 'INT',
                'null' => true,
            ],
            'created_at' => [
                'type' => 'TIMESTAMP',
            ],
            'updated_at' => [
                'type' => 'DATETIME',
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
            ],
        ]);
        $this->forge->addKey('cgallery_id', true);
        $this->forge->createTable('card_gallery_tb');

        $this->forge->addField([
            'pchannel_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'company_code' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'upichannel_name' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'enable' => [
                'type' => 'INT',
                'null' => true,
            ],
            'created_at' => [
                'type' => 'TIMESTAMP',
            ],
            'updated_at' => [
                'type' => 'DATETIME',
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
            ],
        ]);
        $this->forge->addKey('pchannel_id', true);
        $this->forge->createTable('pay_channel_tb');

        $this->forge->addField([
            'payupi_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'company_code' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'company_name' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'upichannel_name' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'registered_no' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'channel_link' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'channel_QR' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'enable' => [
                'type' => 'INT',
                'null' => true,
            ],
            'created_at' => [
                'type' => 'TIMESTAMP',
            ],
            'updated_at' => [
                'type' => 'DATETIME',
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
            ],
        ]);
        $this->forge->addKey('payupi_id', true);
        $this->forge->createTable('card_pay_channel_tb');

        $this->forge->addField([
            'cpayment_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'company_code' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'bank_name' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'holder_name' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'account_no' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'IFSC_code' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'GST_no' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'enable' => [
                'type' => 'INT',
                'null' => true,
            ],
            'created_at' => [
                'type' => 'TIMESTAMP',
            ],
            'updated_at' => [
                'type' => 'DATETIME',
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
            ],
        ]);
        $this->forge->addKey('cpayment_id', true);
        $this->forge->createTable('card_payment_tb');



        $this->forge->addField([
            'franchise_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'franchiseUID' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'company_cat' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'company_name' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'company_code' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'company_email' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'firstname' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'lastname' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'email' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'website' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'copyright' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'location' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'est_date' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'about_us' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'cprofile_pdf' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'support_email' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'sup_contact_no' => [
                'type' => 'VARCHAR',
                'constraint' => '11',
                'null' => true,
            ],
            'whatsapp_business' => [
                'type' => 'VARCHAR',
                'constraint' => '11',
                'null' => true,
            ],
            'address' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'pincode' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'country' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'state' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'city' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'area_name' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'PAN_no' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'STN_no' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'GST_no' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'office_longitutde' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'office_latitutde' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'service_code' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'subsc_cat' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'payment_slabCat' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'slab_value' => [
                'type' => 'INT',
                'null' => true,
            ],
            'enable' => [
                'type' => 'INT',
                'null' => true,
            ],
            'created_at' => [
                'type' => 'TIMESTAMP',
            ],
            'updated_at' => [
                'type' => 'DATETIME',
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
            ],
        ]);
        $this->forge->addKey('franchise_id', true);
        $this->forge->createTable('franchise_tb');

        $this->forge->addField([
            'forders_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'orderUID' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'franchiseUID' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'customer_name' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'item_name' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'item_img' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'item_MRP' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'item_SP' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'enable' => [
                'type' => 'INT',
                'null' => true,
            ],
            'created_at' => [
                'type' => 'TIMESTAMP',
            ],
            'updated_at' => [
                'type' => 'DATETIME',
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
            ],
        ]);
        $this->forge->addKey('forders_id', true);
        $this->forge->createTable('franchise_orders_tb');

        $this->forge->addField([
            'rusers_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'referralUID' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'company_name' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'from_date' => [
                'type' => 'DATE',
                'null' => true,
            ],
            'to_date' => [
                'type' => 'DATE',
                'null' => true,
            ],
            'referral_code' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'slab_cat' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'slab_value' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'enable' => [
                'type' => 'INT',
                'null' => true,
            ],
            'created_at' => [
                'type' => 'TIMESTAMP',
            ],
            'updated_at' => [
                'type' => 'DATETIME',
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
            ],
        ]);
        $this->forge->addKey('rusers_id', true);
        $this->forge->createTable('referral_users_tb');

        /*Website Tables*/
        $this->forge->addField([
            'product_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'product_name' => [
                'type' => 'VARCHAR',
                'constraint' => '225',
                'null' => true,
            ],
            'image' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'description' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'price' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'enable' => [
                'type' => 'INT',
                'null' => true,
            ],
            'created_at' => [
                'type' => 'TIMESTAMP',
            ],
            'updated_at' => [
                'type' => 'DATETIME',
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
            ],
        ]);
        $this->forge->addKey('product_id', true);
        $this->forge->createTable('product_tb');

        $this->forge->addField([
            'order_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'orderUID' => [
                'type' => 'VARCHAR',
                'constraint' => '225',
                'null' => true,
            ],
            'company_code' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'item_MRP' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'item_SP' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'discount' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'invoice' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'enable' => [
                'type' => 'INT',
                'null' => true,
            ],
            'created_at' => [
                'type' => 'TIMESTAMP',
            ],
            'updated_at' => [
                'type' => 'DATETIME',
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
            ],
        ]);
        $this->forge->addKey('order_id', true);
        $this->forge->createTable('order_tb');

        $this->forge->addField([
            'cart_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'orderUID' => [
                'type' => 'VARCHAR',
                'constraint' => '225',
                'null' => true,
            ],
            'product_id' => [
                'type' => 'VARCHAR',
                'constraint' => '225',
                'null' => true,
            ],
            'quantity' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'item_MRP' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'item_SP' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'enable' => [
                'type' => 'INT',
                'null' => true,
            ],
            'created_at' => [
                'type' => 'TIMESTAMP',
            ],
            'updated_at' => [
                'type' => 'DATETIME',
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
            ],
        ]);
        $this->forge->addKey('cart_id', true);
        $this->forge->createTable('cart_tb');

        $this->forge->addField([
            'ccat_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'cat_name' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'cat_label' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'cat_desc' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'enable' => [
                'type' => 'INT',
                'null' => true,
            ],
            'created_at' => [
                'type' => 'TIMESTAMP',
            ],
            'updated_at' => [
                'type' => 'DATETIME',
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
            ],
        ]);
        $this->forge->addKey('ccat_id', true);
        $this->forge->createTable('card_category');
        
        $this->forge->addField([
            'corder_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'orderUID' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'company_name' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'company_code' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'item_name' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'item_img' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'item_MRP' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'item_SP' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'enable' => [
                'type' => 'INT',
                'null' => true,
            ],
            'created_at' => [
                'type' => 'TIMESTAMP',
            ],
            'updated_at' => [
                'type' => 'DATETIME',
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
            ],
        ]);
        $this->forge->addKey('corder_id', true);
        $this->forge->createTable('card_order_tb');
        
        /*Website Tables*/
        $this->forge->addField([
            'tempcat_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'temp_cat' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'enable' => [
                'type' => 'INT',
                'null' => true,
            ],
            'created_at' => [
                'type' => 'TIMESTAMP',
            ],
            'updated_at' => [
                'type' => 'DATETIME',
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
            ],
        ]);
        $this->forge->addKey('tempcat_id', true);
        $this->forge->createTable('tempcategory_tb');

        $this->forge->addField([
            'template_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'temp_name' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'temp_cat' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'temp_preview' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'temp_bodybgimg' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'temp_bodybgcolor' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'temp_loader' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'temp_btnfontcolor' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'temp_btnbgcolor' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'temp_iconpack' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'temp_contact' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'temp_sectionbgcolor' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'temp_sectiongrdcolor' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'temp_sectionbgimg' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'enable' => [
                'type' => 'INT',
                'null' => true,
            ],
            'created_at' => [
                'type' => 'TIMESTAMP',
            ],
            'updated_at' => [
                'type' => 'DATETIME',
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
            ],
        ]);
        $this->forge->addKey('template_id', true);
        $this->forge->createTable('template_tb');

        $this->forge->addField([
            'navcat_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nav_cat' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'enable' => [
                'type' => 'INT',
                'null' => true,
            ],
            'created_at' => [
                'type' => 'TIMESTAMP',
            ],
            'updated_at' => [
                'type' => 'DATETIME',
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
            ],
        ]);
        $this->forge->addKey('navcat_id', true);
        $this->forge->createTable('navcategory_tb');

        $this->forge->addField([
            'navigation_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nav_cat' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'temp_cat' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'pages_name' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'enable' => [
                'type' => 'INT',
                'null' => true,
            ],
            'created_at' => [
                'type' => 'TIMESTAMP',
            ],
            'updated_at' => [
                'type' => 'DATETIME',
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
            ],
        ]);
        $this->forge->addKey('navigation_id', true);
        $this->forge->createTable('navigation_tb');

        /*Accounts Tables*/
        $this->forge->addField([
            'expenses_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'company_code' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'customer_name' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'vendor_name' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'exp_catname' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'exp_amount' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'exp_name' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'exp_receipt' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'exp_date' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'exp_details' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'payment_mode' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'exp_tax' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'repeat_status' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'enable' => [
                'type' => 'INT',
                'null' => true,
            ],
            'created_at' => [
                'type' => 'TIMESTAMP',
            ],
            'updated_at' => [
                'type' => 'DATETIME',
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
            ],
        ]);
        $this->forge->addKey('expenses_id', true);
        $this->forge->createTable('expenses_tb');

        $this->forge->addField([
            'exp_cat_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'expenses_cat' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'enable' => [
                'type' => 'INT',
                'null' => true,
            ],
            'created_at' => [
                'type' => 'TIMESTAMP',
            ],
            'updated_at' => [
                'type' => 'DATETIME',
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
            ],
        ]);
        $this->forge->addKey('exp_cat_id', true);
        $this->forge->createTable('expenses_cat_tb');

        $this->forge->addField([
            'vendor_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'vendor_code' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'vendor_name' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'vendor_cat' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'vndr_contactname' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'vndr_mobileno' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'vndr_website' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'vndr_address' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'vndr_city' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'vndr_state' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'vndr_zipcode' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'vndr_country' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'vndr_bank' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'vndr_VAT' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'terms_payment' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'terms_return' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'enable' => [
                'type' => 'INT',
                'null' => true,
            ],
            'created_at' => [
                'type' => 'TIMESTAMP',
            ],
            'updated_at' => [
                'type' => 'DATETIME',
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
            ],
        ]);
        $this->forge->addKey('vendor_id', true);
        $this->forge->createTable('vendor_tb');

        $this->forge->addField([
            'vndr_cat_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'vendor_cat' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'enable' => [
                'type' => 'INT',
                'null' => true,
            ],
            'created_at' => [
                'type' => 'TIMESTAMP',
            ],
            'updated_at' => [
                'type' => 'DATETIME',
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
            ],
        ]);
        $this->forge->addKey('vndr_cat_id', true);
        $this->forge->createTable('vendor_cat_tb');

        $this->forge->addField([
            'voucher_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'enable' => [
                'type' => 'INT',
                'null' => true,
            ],
            'created_at' => [
                'type' => 'TIMESTAMP',
            ],
            'updated_at' => [
                'type' => 'DATETIME',
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
            ],
        ]);
        $this->forge->addKey('voucher_id', true);
        $this->forge->createTable('voucher_tb');

        $this->forge->addField([
            'sales_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'enable' => [
                'type' => 'INT',
                'null' => true,
            ],
            'created_at' => [
                'type' => 'TIMESTAMP',
            ],
            'updated_at' => [
                'type' => 'DATETIME',
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
            ],
        ]);
        $this->forge->addKey('sales_id', true);
        $this->forge->createTable('sales_tb');

        $this->forge->addField([
            'planding_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'enable' => [
                'type' => 'INT',
                'null' => true,
            ],
            'created_at' => [
                'type' => 'TIMESTAMP',
            ],
            'updated_at' => [
                'type' => 'DATETIME',
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
            ],
        ]);
        $this->forge->addKey('planding_id', true);
        $this->forge->createTable('promo_landing_tb');

        $this->forge->addField([
            'pnewsletter_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'enable' => [
                'type' => 'INT',
                'null' => true,
            ],
            'created_at' => [
                'type' => 'TIMESTAMP',
            ],
            'updated_at' => [
                'type' => 'DATETIME',
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
            ],
        ]);
        $this->forge->addKey('pnewsletter_id', true);
        $this->forge->createTable('promo_newsletter_tb');

        $this->forge->addField([
            'campaign_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'santaUID' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'full_name' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'mobile_no' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'emal' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'receiver_address' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'channel_name' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'channel_url' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'product_link' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'sndr_address' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'sndr_message' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'reels_link' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'video_link' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'image_link' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'invoiceUID' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'invoiceDate' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'orderUID' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'enable' => [
                'type' => 'INT',
                'null' => true,
            ],
            'created_at' => [
                'type' => 'TIMESTAMP',
            ],
            'updated_at' => [
                'type' => 'DATETIME',
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
            ],
        ]);
        $this->forge->addKey('campaign_id', true);
        $this->forge->createTable('campaign_tb');

        $this->forge->addField([
            'header_info_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'enable' => [
                'type' => 'INT',
                'null' => true,
            ],
            'created_at' => [
                'type' => 'TIMESTAMP',
            ],
            'updated_at' => [
                'type' => 'DATETIME',
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
            ],
        ]);
        $this->forge->addKey('header_info_id', true);
        $this->forge->createTable('header_info_tb');

        $this->forge->addField([
            'footer_info_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'enable' => [
                'type' => 'INT',
                'null' => true,
            ],
            'created_at' => [
                'type' => 'TIMESTAMP',
            ],
            'updated_at' => [
                'type' => 'DATETIME',
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
            ],
        ]);
        $this->forge->addKey('footer_info_id', true);
        $this->forge->createTable('footer_info_tb');
    }

    public function down()
    {
        /*Admin Department*/
        $this->forge->dropTable('user_tb');
        $this->forge->dropTable('roles_tb');
        $this->forge->dropTable('permission_tb');
        $this->forge->dropTable('subscription_tb');

        /*Customer Card Department*/
        $this->forge->dropTable('customer_tb');
        $this->forge->dropTable('card_info_tb');
        $this->forge->dropTable('card_template_tb');
                              
        $this->forge->dropTable('team_cat_tb');
        $this->forge->dropTable('team_designation_tb');
        $this->forge->dropTable('card_team_tb');

        $this->forge->dropTable('social_channel_tb');
        $this->forge->dropTable('card_social_link_tb');

        $this->forge->dropTable('product_category_tb');
        $this->forge->dropTable('card_product_tb');

        $this->forge->dropTable('service_category_tb');
        $this->forge->dropTable('card_service_tb');

        $this->forge->dropTable('catalogue_category_tb');
        $this->forge->dropTable('catalogue_charac_tb');
        $this->forge->dropTable('card_catalogue_tb');

        $this->forge->dropTable('card_gallery_tb');

        $this->forge->dropTable('card_pay_channel_tb');
        $this->forge->dropTable('card_payment_tb');
       
        /*Franchise Department*/
        $this->forge->dropTable('franchise_tb');
        $this->forge->dropTable('franchise_orders_tb');
        $this->forge->dropTable('referral_users_tb');
        /*Webcom Department*/
        $this->forge->dropTable('product_tb');
        $this->forge->dropTable('order_tb');
        $this->forge->dropTable('cart_tb');
        $this->forge->dropTable('card_category');
        $this->forge->dropTable('card_order_tb');
        /*template management*/

        $this->forge->dropTable('tempcategory_tb');
        $this->forge->dropTable('template_tb');
        
        /*Accounts Department*/
        $this->forge->dropTable('expenses_tb');
        $this->forge->dropTable('voucher_tb');
        $this->forge->dropTable('sales_tb');
        /*Marketing Department*/
        $this->forge->dropTable('campaign_tb');
        $this->forge->dropTable('promo_landing_tb');
        $this->forge->dropTable('promo_newsletter_tb');
        $this->forge->dropTable('header_info_tb');
        $this->forge->dropTable('footer_info_tb');
        
    }
}