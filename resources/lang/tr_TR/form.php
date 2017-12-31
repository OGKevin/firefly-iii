<?php
/**
 * form.php
 * Copyright (c) 2017 thegrumpydictator@gmail.com
 *
 * This file is part of Firefly III.
 *
 * Firefly III is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Firefly III is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Firefly III. If not, see <http://www.gnu.org/licenses/>.
 */
declare(strict_types=1);

return [
    // new user:
    'bank_name'                      => 'Banka adı',
    'bank_balance'                   => 'Bakiye',
    'savings_balance'                => 'Tasarruf bakiyesi',
    'credit_card_limit'              => 'Kredi kartı limiti',
    'automatch'                      => 'Otomatik olarak eşleştir',
    'skip'                           => 'Atla',
    'name'                           => 'İsim',
    'active'                         => 'Aktif',
    'amount_min'                     => 'Minimum tutar',
    'amount_max'                     => 'Minimum tutar',
    'match'                          => 'Eşleşti',
    'repeat_freq'                    => 'Tekrarlar',
    'journal_currency_id'            => 'Para birimi',
    'currency_id'                    => 'Para birimi',
    'attachments'                    => 'Ekler',
    'journal_amount'                 => 'Tutar',
    'journal_source_account_name'    => 'Gelir hesabı (kaynak)',
    'journal_source_account_id'      => 'Varlık hesabı (kaynak)',
    'BIC'                            => 'BIC',
    'verify_password'                => 'Parola güvenliğini doğrula',
    'source_account'                 => 'Kaynak hesap',
    'destination_account'            => 'Hedef Hesap',
    'journal_destination_account_id' => 'Öğe hesabı (Hedef)',
    'asset_destination_account'      => 'Öğe hesabı (Hedef)',
    'asset_source_account'           => 'Varlık Hesabı (kaynak)',
    'journal_description'            => 'Tanımlama',
    'note'                           => 'Notlar',
    'split_journal'                  => 'Bu işlemi böl / Taksitlendir',
    'split_journal_explanation'      => 'Bu işlemi taksitlendirin',
    'currency'                       => 'Para birimi',
    'account_id'                     => 'Varlık hesabı',
    'budget_id'                      => 'Bütçe',
    'openingBalance'                 => 'Açılış bakiyesi',
    'tagMode'                        => 'Etiket modu',
    'tag_position'                   => 'Etiket konumu',
    'virtualBalance'                 => 'Sanal bakiye',
    'targetamount'                   => 'Hedef tutar',
    'accountRole'                    => 'Hesap rolü',
    'openingBalanceDate'             => 'Açılış bakiyesi tarihi',
    'ccType'                         => 'Kredi kartı ödeme planı',
    'ccMonthlyPaymentDate'           => 'Kredi kartı aylık ödeme tarihi',
    'piggy_bank_id'                  => 'Kumbara',
    'returnHere'                     => 'Dön buraya',
    'returnHereExplanation'          => 'Sakladıktan sonra, başka bir tane oluşturmak için buraya dön.',
    'returnHereUpdateExplanation'    => 'Güncelledikten sonra buraya dönün.',
    'description'                    => 'Tanımlama',
    'expense_account'                => 'Gider Hesabı',
    'revenue_account'                => 'Gelir hesabı',
    'decimal_places'                 => 'Ondalık basamak',
    'exchange_rate_instruction'      => 'Yabancı para birimleri',
    'source_amount'                  => 'Miktar (kaynak)',
    'destination_amount'             => 'Miktar (Hedef)',
    'native_amount'                  => 'Yerli Miktar',
    'new_email_address'              => 'Yeni e-posta adresi',
    'verification'                   => 'Doğrulama',
    'api_key'                        => 'API anahtarı',

    'source_account_asset'        => 'Kaynak Hesabı (varlık hesabı)',
    'destination_account_expense' => 'Hedef Hesap (gider hesabı)',
    'destination_account_asset'   => 'Hedef hesabı (gider hesabı)',
    'source_account_revenue'      => 'Kaynak hesap (gelir hesabı)',
    'type'                        => 'Tür',
    'convert_Withdrawal'          => 'Para çekmeyi değiştir',
    'convert_Deposit'             => 'Mevduata dönüştürün',
    'convert_Transfer'            => 'Aktarımı dönüştür',

    'amount'                     => 'Tutar',
    'date'                       => 'Tarih',
    'interest_date'              => 'Faiz tarihi',
    'book_date'                  => 'Kitap Tarihi',
    'process_date'               => 'İşlem tarihi',
    'category'                   => 'Kategori',
    'tags'                       => 'Etiketler',
    'deletePermanently'          => 'Kalıcı olarak sil',
    'cancel'                     => 'İptal',
    'targetdate'                 => 'Hedeflenen tarih',
    'startdate'                  => 'Başlangıç Tarihi',
    'tag'                        => 'Etiket',
    'under'                      => 'Altında',
    'symbol'                     => 'Sembol',
    'code'                       => 'Kod',
    'iban'                       => 'IBAN numarası',
    'accountNumber'              => 'Hesap numarası',
    'creditCardNumber'           => 'Kredi Kartı Numarası',
    'has_headers'                => 'Başlıklar',
    'date_format'                => 'Tarih formatı',
    'specifix'                   => 'Banka veya dosyalara özel düzeltmeler',
    'attachments[]'              => 'Ekler',
    'store_new_withdrawal'       => 'Yeni para çekme oluştur',
    'store_new_deposit'          => 'Yeni depozito oluştur',
    'store_new_transfer'         => 'Yeni transfer oluştur',
    'add_new_withdrawal'         => 'Yeni para çekme ekle',
    'add_new_deposit'            => 'Yeni depozito ekle',
    'add_new_transfer'           => 'Yeni bir transfer ekle',
    'title'                      => 'Başlık',
    'notes'                      => 'Notlar',
    'filename'                   => 'Dosya adı',
    'mime'                       => 'MIME türü',
    'size'                       => 'Boyut',
    'trigger'                    => 'Tetikleyici',
    'stop_processing'            => 'İşlemeyi durdur',
    'start_date'                 => 'Sayfa başlangıcı',
    'end_date'                   => 'Kapsama alanı dışında',
    'export_start_range'         => 'İhracatın başlangıcı',
    'export_end_range'           => 'İhracatın sonu',
    'export_format'              => 'Dosya biçimi',
    'include_attachments'        => 'Yüklenen ekleri dahil et',
    'include_old_uploads'        => 'İçe aktarılan verileri dahil et',
    'accounts'                   => 'Bu hesaptan işlemleri çıkarın',
    'delete_account'             => '\'\': Name\'\' adlı hesabı sil',
    'delete_bill'                => 'Faturayı sil \'\': name\'\'',
    'delete_budget'              => '": Name" bütçesini sil',
    'delete_category'            => '\'\' Name\'\' kategorisini sil',
    'delete_currency'            => 'Para birimini sil \'\':name\'\'',
    'delete_journal'             => '":description" açıklamalı işlemi sil',
    'delete_attachment'          => '\'\': name\'\' eklentisini sil',
    'delete_rule'                => '\'":title" kuralını sil',
    'delete_rule_group'          => '":title" kural grubunu sil',
    'delete_link_type'           => '":name" bağlantı türünü sil',
    'delete_user'                => '":email" kullanıcısını sil',
    'user_areYouSure'            => '":email" kullanıcısını silerseniz her şey gitmiş olacak. Geriye alma, silmeyi iptal etme veya başka bir şey yoktur. Eğer kendinizi silerseniz, bu Firefly III\'e erişiminizi kaybedersiniz.',
    'attachment_areYouSure'      => '":name" isimli eklentiyi silmek istediğinizden emin misiniz?',
    'account_areYouSure'         => '":name" isimli hesabı silmek istediğinizden emin misiniz?',
    'bill_areYouSure'            => '":name" isimli faturayı silmek istediğinizden emin misiniz?',
    'rule_areYouSure'            => '":title" başlıklı kuralı silmek istediğinizden emin misiniz?',
    'ruleGroup_areYouSure'       => '":title" başlıklı kural grubunu silmek istediğinizden emin misiniz?',
    'budget_areYouSure'          => '":name" isimli bütçeyi silmek istediğinizden emin misiniz?',
    'category_areYouSure'        => '":name" isimli kategoriyi silmek istediğinizden emin misiniz?',
    'currency_areYouSure'        => '":name" isimli para birimini silmek istediğinizden emin misiniz?',
    'piggyBank_areYouSure'       => '":name" isimli kumbarayı silmek istediğinizden emin misiniz?',
    'journal_areYouSure'         => ':description" açıklamalı işlemi silmek istediğinizden emin misiniz?',
    'mass_journal_are_you_sure'  => 'Bu işlemi silmek istediğinizden emin misiniz?',
    'tag_areYouSure'             => '":tag" etiketini silmek istediğinizden emin misiniz?',
    'journal_link_areYouSure'    => '<a href=":source_link">:kaynak</a> and <a href=":destination_link">:hedef</a> arasındaki bağlantıyı silmek istediğinizden emin misiniz?',
    'linkType_areYouSure'        => '":name" (":inward" / ":outside") bağlantı türünü silmek istediğinizden emin misiniz?',
    'permDeleteWarning'          => 'Firely\'den bir şeyler silmek kalıcıdır ve geri alınamaz.',
    'mass_make_selection'        => 'Onay kutusunu kaldırarak öğelerin silinmesini engelleyebilirsiniz.',
    'delete_all_permanently'     => 'Seçilenleri kalıcı olarak sil',
    'update_all_journals'        => 'Bu işlemleri güncelleyin',
    'also_delete_transactions'   => 'Bu hesaba bağlı olan tek işlem de silinecektir. |Bu hesaba bağlı tüm :count işlemleri de silinecektir.',
    'also_delete_connections'    => 'Bu bağlantıya bağlı tek işlem bağlantısını kaybedecek.| Bu bağlantı türüne bağlı tüm :count işlemleri bağlantılarını kaybedecek.',
    'also_delete_rules'          => 'Bu hesaba bağlı olan tek kural grubu da silinecektir. |Bu hesaba bağlı tüm :count kuralları da silinecektir.',
    'also_delete_piggyBanks'     => 'Bu hesaba bağlı olan tek kumbara da silinecektir. |Bu hesaba bağlı olan tüm :count kumbaraları da silinecektir.',
    'bill_keep_transactions'     => 'Bu hesaba bağlı olan tek işlem de silinmeyecek. |Bu hesaba bağlı tüm :count işlemleri de silinmeden muaf olacaklar.',
    'budget_keep_transactions'   => 'Bu bütçeye bağlı olan tek işlem silinmeyecek. |Bu bütçeye bağlı tüm :count işlemleri de silinmeden muaf olacaklar.',
    'category_keep_transactions' => 'Bu kategoriye bağlı olan tek işlem silinmeyecek. |Bu kategoriye bağlı tüm :count işlemleri de silinmeden muaf olacaklar.',
    'tag_keep_transactions'      => 'Bu etikete bağlı olan tek işlem silinmeyecek. |Bu etikete bağlı tüm :count işlemleri de silinmeden muaf olacaklar.',
    'check_for_updates'          => 'Check for updates',

    'email'                 => 'E-posta adresi',
    'password'              => 'Şifre',
    'password_confirmation' => 'Şifre (Tekrar)',
    'blocked'               => 'Engellendi mi?',
    'blocked_code'          => 'Blok nedeni',

    // admin
    'domain'                => 'Alan adı',
    'single_user_mode'      => 'Kullanıcı kaydını devre dışı bırak',
    'is_demo_site'          => 'Demo sitesi var mı',

    // import
    'import_file'           => 'Önemli dosya',
    'configuration_file'    => 'Yapılandırma dosyası',
    'import_file_type'      => 'Dosya türünü içe aktar',
    'csv_comma'             => 'Bir virgül (,)',
    'csv_semicolon'         => 'Noktalı virgül (;)',
    'csv_tab'               => 'Bir sekme (görünmez)',
    'csv_delimiter'         => 'CSV alan ayırıcısı',
    'csv_import_account'    => 'Varsayılan ithalat hesabı',
    'csv_config'            => 'CSV içe aktarım yapılandırılması',
    'client_id'             => 'Müşteri Kimliği',
    'service_secret'        => 'Hizmet Sırrı',
    'app_secret'            => 'Uygulama Sırrı',
    'public_key'            => 'Genel anahtar',
    'country_code'          => 'Ülke kodu',
    'provider_code'         => 'Banka ya da veri sağlayıcı',

    'due_date'           => 'Bitiş Tarihi',
    'payment_date'       => 'Ödeme Tarihi',
    'invoice_date'       => 'Fatura Tarihi',
    'internal_reference' => 'Dahili referans',
    'inward'             => 'Dahili açıklama',
    'outward'            => 'Harici açıklama',
    'rule_group_id'      => 'Kural grubu',
];