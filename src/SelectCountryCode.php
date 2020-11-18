<?php

namespace Tapp\SelectCountryCode;

use Laravel\Nova\Fields\Field;

class SelectCountryCode extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'select-country-code';

    public $iconsDirectory = '/vendor/tapp/nova-select-country-code';

    public $iconsFormat = 'svg';

    public $options = [
        ['label' => 'Afghanistan', 'country_code' => '+93', 'iso_code' => 'AF'],
        ['label' => 'Albania', 'country_code' => '+355', 'iso_code' => 'AL'],
        ['label' => 'Algeria', 'country_code' => '+213', 'iso_code' => 'DZ'],
        ['label' => 'American Samoa', 'country_code' => '+1-684', 'iso_code' => 'AS'],
        ['label' => 'Andorra', 'country_code' => '+376', 'iso_code' => 'AD'],
        ['label' => 'Angola', 'country_code' => '+244', 'iso_code' => 'AO'],
        ['label' => 'Anguilla', 'country_code' => '+1-264', 'iso_code' => 'AI'],
        ['label' => 'Antigua and Barbuda', 'country_code' => '+1-268', 'iso_code' => 'AG'],
        ['label' => 'Argentina', 'country_code' => '+54', 'iso_code' => 'AR'],
        ['label' => 'Armenia', 'country_code' => '+374', 'iso_code' => 'AM'],
        ['label' => 'Aruba Kingdom of the Netherlands', 'country_code' => '+297', 'iso_code' => 'AW'],
        ['label' => 'Australia', 'country_code' => '+61', 'iso_code' => 'AU'],
        ['label' => 'Austria', 'country_code' => '+43', 'iso_code' => 'AT'],
        ['label' => 'Azerbaijan', 'country_code' => '+994', 'iso_code' => 'AZ'],
        ['label' => 'Bahamas', 'country_code' => '+1-242', 'iso_code' => 'BS'],
        ['label' => 'Bahrain', 'country_code' => '+973', 'iso_code' => 'BH'],
        ['label' => 'Bangladesh', 'country_code' => '+880', 'iso_code' => 'BD'],
        ['label' => 'Barbados', 'country_code' => '+1-246', 'iso_code' => 'BB'],
        ['label' => 'Belarus', 'country_code' => '+375', 'iso_code' => 'BY'],
        ['label' => 'Belgium', 'country_code' => '+32', 'iso_code' => 'BE'],
        ['label' => 'Belize', 'country_code' => '+501', 'iso_code' => 'BZ'],
        ['label' => 'Benin', 'country_code' => '+229', 'iso_code' => 'BJ'],
        ['label' => 'Bermuda', 'country_code' => '+1-441', 'iso_code' => 'BM'],
        ['label' => 'Bhutan', 'country_code' => '+975', 'iso_code' => 'BT'],
        ['label' => 'Bolivia', 'country_code' => '+591', 'iso_code' => 'BO'],
        ['label' => 'Bosnia and Herzegovina', 'country_code' => '+387', 'iso_code' => 'BA'],
        ['label' => 'Botswana', 'country_code' => '+267', 'iso_code' => 'BW'],
        ['label' => 'Brazil', 'country_code' => '+55', 'iso_code' => 'BR'],
        ['label' => 'Brunei Darussalam', 'country_code' => '+673', 'iso_code' => 'BN'],
        ['label' => 'Bulgaria', 'country_code' => '+359', 'iso_code' => 'BG'],
        ['label' => 'Burkina Faso', 'country_code' => '+226', 'iso_code' => 'BF'],
        ['label' => 'Burundi', 'country_code' => '+257', 'iso_code' => 'BI'],
        ['label' => 'Cabo Verde', 'country_code' => '+238', 'iso_code' => 'CV'],
        ['label' => 'Cambodia', 'country_code' => '+855', 'iso_code' => 'KH'],
        ['label' => 'Cameroon', 'country_code' => '+237', 'iso_code' => 'CM'],
        ['label' => 'Canada', 'country_code' => '+1', 'iso_code' => 'CA'],
        ['label' => 'Cayman Islands', 'country_code' => '+1-345', 'iso_code' => 'KY'],
        ['label' => 'Central African Republic', 'country_code' => '+236', 'iso_code' => 'CF'],
        ['label' => 'Chad', 'country_code' => '+235', 'iso_code' => 'TD'],
        ['label' => 'Chile', 'country_code' => '+56', 'iso_code' => 'CL'],
        ['label' => 'China', 'country_code' => '+86', 'iso_code' => 'CN'],
        ['label' => 'Colombia', 'country_code' => '+57', 'iso_code' => 'CO'],
        ['label' => 'Comoros', 'country_code' => '+269', 'iso_code' => 'KM'],
        ['label' => 'Congo', 'country_code' => '+243', 'iso_code' => 'CD'],
        ['label' => 'Cook Islands', 'country_code' => '+682', 'iso_code' => 'CK'],
        ['label' => 'Costa Rica', 'country_code' => '+506', 'iso_code' => 'CR'],
        ['label' => 'Cote d\'Ivoire', 'country_code' => '+225', 'iso_code' => 'CI'],
        ['label' => 'Croatia', 'country_code' => '+385', 'iso_code' => 'HR'],
        ['label' => 'Cuba', 'country_code' => '+53', 'iso_code' => 'CU'],
        ['label' => 'Curaçao Kingdom of the Netherlands', 'country_code' => '+599', 'iso_code' => 'CW'],
        ['label' => 'Cyprus', 'country_code' => '+357', 'iso_code' => 'CY'],
        ['label' => 'Czech Republic', 'country_code' => '+420', 'iso_code' => 'CZ'],
        ['label' => 'Denmark', 'country_code' => '+45', 'iso_code' => 'DK'],
        ['label' => 'Djibouti', 'country_code' => '+253', 'iso_code' => 'DJ'],
        ['label' => 'Dominica', 'country_code' => '+1-767', 'iso_code' => 'DM'],
        ['label' => 'Dominican Republic', 'country_code' => '+1-809, 1-829, 1-849', 'iso_code' => 'DO'],
        ['label' => 'Ecuador', 'country_code' => '+593', 'iso_code' => 'EC'],
        ['label' => 'Egypt', 'country_code' => '+20', 'iso_code' => 'EG'],
        ['label' => 'El Salvador', 'country_code' => '+503', 'iso_code' => 'SV'],
        ['label' => 'Equatorial Guinea', 'country_code' => '+240', 'iso_code' => 'GQ'],
        ['label' => 'Eritrea', 'country_code' => '+291', 'iso_code' => 'ER'],
        ['label' => 'Estonia', 'country_code' => '+372', 'iso_code' => 'EE'],
        ['label' => 'Ethiopia', 'country_code' => '+251', 'iso_code' => 'ET'],
        ['label' => 'Fiji', 'country_code' => '+679', 'iso_code' => 'FJ'],
        ['label' => 'Finland', 'country_code' => '+358', 'iso_code' => 'FI'],
        ['label' => 'France', 'country_code' => '+33', 'iso_code' => 'FR'],
        ['label' => 'Gabon', 'country_code' => '+241', 'iso_code' => 'GA'],
        ['label' => 'Gambia', 'country_code' => '+220', 'iso_code' => 'GM'],
        ['label' => 'Georgia', 'country_code' => '+995', 'iso_code' => 'GE'],
        ['label' => 'Germany', 'country_code' => '+49', 'iso_code' => 'DE'],
        ['label' => 'Ghana', 'country_code' => '+233', 'iso_code' => 'GH'],
        ['label' => 'Gibraltar', 'country_code' => '+350', 'iso_code' => 'GI'],
        ['label' => 'Greece', 'country_code' => '+30', 'iso_code' => 'GR'],
        ['label' => 'Grenada', 'country_code' => '+1-473', 'iso_code' => 'GD'],
        ['label' => 'Guam', 'country_code' => '+1-671', 'iso_code' => 'GU'],
        ['label' => 'Guatemala', 'country_code' => '+502', 'iso_code' => 'GT'],
        ['label' => 'Guernsey', 'country_code' => '+44-1481', 'iso_code' => 'GG'],
        ['label' => 'Guinea', 'country_code' => '+224', 'iso_code' => 'GN'],
        ['label' => 'Guinea Bissau', 'country_code' => '+245', 'iso_code' => 'GW'],
        ['label' => 'Guyana', 'country_code' => '+592', 'iso_code' => 'GY'],
        ['label' => 'Haiti', 'country_code' => '+509', 'iso_code' => 'HT'],
        ['label' => 'Honduras', 'country_code' => '+504', 'iso_code' => 'HN'],
        ['label' => 'Hungary', 'country_code' => '+36', 'iso_code' => 'HU'],
        ['label' => 'Iceland', 'country_code' => '+354', 'iso_code' => 'IS'],
        ['label' => 'India', 'country_code' => '+91', 'iso_code' => 'IN'],
        ['label' => 'Indonesia', 'country_code' => '+62', 'iso_code' => 'ID'],
        ['label' => 'Iran', 'country_code' => '+98', 'iso_code' => 'IR'],
        ['label' => 'Iraq', 'country_code' => '+964', 'iso_code' => 'IQ'],
        ['label' => 'Ireland', 'country_code' => '+353', 'iso_code' => 'IE'],
        ['label' => 'Isle of Man', 'country_code' => '+44-1624', 'iso_code' => 'IM'],
        ['label' => 'Israel', 'country_code' => '+972', 'iso_code' => 'IL'],
        ['label' => 'Italy', 'country_code' => '+39', 'iso_code' => 'IT'],
        ['label' => 'Jamaica', 'country_code' => '+1-876', 'iso_code' => 'JM'],
        ['label' => 'Japan', 'country_code' => '+81', 'iso_code' => 'JP'],
        ['label' => 'Jersey', 'country_code' => '+44-1534', 'iso_code' => 'JE'],
        ['label' => 'Jordan', 'country_code' => '+962', 'iso_code' => 'JO'],
        ['label' => 'Kazakhstan', 'country_code' => '+7', 'iso_code' => 'KZ'],
        ['label' => 'Kenya', 'country_code' => '+254', 'iso_code' => 'KE'],
        ['label' => 'Korea North', 'country_code' => '+850', 'iso_code' => 'KP'],
        ['label' => 'Korea South', 'country_code' => '+82', 'iso_code' => 'KR'],
        ['label' => 'Kosovo', 'country_code' => '+383', 'iso_code' => 'XK'],
        ['label' => 'Kuwait', 'country_code' => '+965', 'iso_code' => 'KW'],
        ['label' => 'Kyrgyzstan', 'country_code' => '+996', 'iso_code' => 'KG'],
        ['label' => 'Laos', 'country_code' => '+856', 'iso_code' => 'LA'],
        ['label' => 'Latvia', 'country_code' => '+371', 'iso_code' => 'LV'],
        ['label' => 'Lebanon', 'country_code' => '+961', 'iso_code' => 'LB'],
        ['label' => 'Lesotho', 'country_code' => '+266', 'iso_code' => 'LS'],
        ['label' => 'Liberia', 'country_code' => '+231', 'iso_code' => 'LR'],
        ['label' => 'Libya', 'country_code' => '+218', 'iso_code' => 'LY'],
        ['label' => 'Liechtenstein', 'country_code' => '+423', 'iso_code' => 'LI'],
        ['label' => 'Lithuania', 'country_code' => '+370', 'iso_code' => 'LT'],
        ['label' => 'Luxembourg', 'country_code' => '+352', 'iso_code' => 'LU'],
        ['label' => 'Madagascar', 'country_code' => '+261', 'iso_code' => 'MG'],
        ['label' => 'Malawi', 'country_code' => '+265', 'iso_code' => 'MW'],
        ['label' => 'Malaysia', 'country_code' => '+60', 'iso_code' => 'MY'],
        ['label' => 'Maldives', 'country_code' => '+960', 'iso_code' => 'MV'],
        ['label' => 'Mali', 'country_code' => '+223', 'iso_code' => 'ML'],
        ['label' => 'Malta', 'country_code' => '+356', 'iso_code' => 'MT'],
        ['label' => 'Marshall Islands', 'country_code' => '+692', 'iso_code' => 'MH'],
        ['label' => 'Mauritania', 'country_code' => '+222', 'iso_code' => 'MR'],
        ['label' => 'Mauritius', 'country_code' => '+230', 'iso_code' => 'MU'],
        ['label' => 'Mexico', 'country_code' => '+52', 'iso_code' => 'MX'],
        ['label' => 'Moldova', 'country_code' => '+373', 'iso_code' => 'MD'],
        ['label' => 'Monaco', 'country_code' => '+377', 'iso_code' => 'MC'],
        ['label' => 'Mongolia', 'country_code' => '+976', 'iso_code' => 'MN'],
        ['label' => 'Montenegro', 'country_code' => '+382', 'iso_code' => 'ME'],
        ['label' => 'Montserrat', 'country_code' => '+1-664', 'iso_code' => 'MS'],
        ['label' => 'Morocco', 'country_code' => '+212', 'iso_code' => 'MA'],
        ['label' => 'Mozambique', 'country_code' => '+258', 'iso_code' => 'MZ'],
        ['label' => 'Myanmar', 'country_code' => '+95', 'iso_code' => 'MM'],
        ['label' => 'Namibia', 'country_code' => '+264', 'iso_code' => ''],
        ['label' => 'Nauru', 'country_code' => '+674', 'iso_code' => 'NR'],
        ['label' => 'Nepal', 'country_code' => '+977', 'iso_code' => 'NP'],
        ['label' => 'Netherlands', 'country_code' => '+31', 'iso_code' => 'NL'],
        ['label' => 'New Zealand', 'country_code' => '+64', 'iso_code' => 'NZ'],
        ['label' => 'Nicaragua', 'country_code' => '+505', 'iso_code' => 'NI'],
        ['label' => 'Niger', 'country_code' => '+227', 'iso_code' => 'NE'],
        ['label' => 'Nigeria', 'country_code' => '+234', 'iso_code' => 'NG'],
        ['label' => 'Niue', 'country_code' => '+683', 'iso_code' => 'NU'],
        ['label' => 'North Macedonia', 'country_code' => '+389', 'iso_code' => 'MK'],
        ['label' => 'Norway', 'country_code' => '+47', 'iso_code' => 'NO'],
        ['label' => 'Oman', 'country_code' => '+968', 'iso_code' => 'OM'],
        ['label' => 'Pakistan', 'country_code' => '+92', 'iso_code' => 'PK'],
        ['label' => 'Palau', 'country_code' => '+680', 'iso_code' => 'PW'],
        ['label' => 'Palestinian Authority', 'country_code' => '+970', 'iso_code' => 'PS'],
        ['label' => 'Panama', 'country_code' => '+507', 'iso_code' => 'PA'],
        ['label' => 'Papua New Guinea', 'country_code' => '+675', 'iso_code' => 'PG'],
        ['label' => 'Paraguay', 'country_code' => '+595', 'iso_code' => 'PY'],
        ['label' => 'Peru', 'country_code' => '+51', 'iso_code' => 'PE'],
        ['label' => 'Philippines', 'country_code' => '+63', 'iso_code' => 'PH'],
        ['label' => 'Poland', 'country_code' => '+48', 'iso_code' => 'PL'],
        ['label' => 'Portugal', 'country_code' => '+351', 'iso_code' => 'PT'],
        ['label' => 'Qatar', 'country_code' => '+974', 'iso_code' => 'QA'],
        ['label' => 'Romania', 'country_code' => '+40', 'iso_code' => 'RO'],
        ['label' => 'Russia', 'country_code' => '+7', 'iso_code' => 'RU'],
        ['label' => 'Rwanda', 'country_code' => '+250', 'iso_code' => 'RW'],
        ['label' => 'Saint Kitts and Nevis', 'country_code' => '+1-869', 'iso_code' => 'KN'],
        ['label' => 'Saint Lucia', 'country_code' => '+1-758', 'iso_code' => 'LC'],
        ['label' => 'Saint Vincent & the Grenadines', 'country_code' => '+1-784', 'iso_code' => 'VC'],
        ['label' => 'Samoa', 'country_code' => '+685', 'iso_code' => 'WS'],
        ['label' => 'San Marino', 'country_code' => '+378', 'iso_code' => 'SM'],
        ['label' => 'Sao Tome and Principe', 'country_code' => '+239', 'iso_code' => 'ST'],
        ['label' => 'Saudi Arabia', 'country_code' => '+966', 'iso_code' => 'SA'],
        ['label' => 'Senegal', 'country_code' => '+221', 'iso_code' => 'SN'],
        ['label' => 'Serbia', 'country_code' => '+381', 'iso_code' => 'RS'],
        ['label' => 'Seychelles', 'country_code' => '+248', 'iso_code' => 'SC'],
        ['label' => 'Sierra Leone', 'country_code' => '+232', 'iso_code' => 'SL'],
        ['label' => 'Singapore', 'country_code' => '+65', 'iso_code' => 'SG'],
        ['label' => 'Sint Maarten Kingdom of the Netherlands', 'country_code' => '+1-721', 'iso_code' => 'SX'],
        ['label' => 'Slovakia', 'country_code' => '+421', 'iso_code' => 'SK'],
        ['label' => 'Slovenia', 'country_code' => '+386', 'iso_code' => 'SI'],
        ['label' => 'Solomon Islands', 'country_code' => '+677', 'iso_code' => 'SB'],
        ['label' => 'Somalia', 'country_code' => '+252', 'iso_code' => 'SO'],
        ['label' => 'South Africa', 'country_code' => '+27', 'iso_code' => 'ZA'],
        ['label' => 'South Sudan', 'country_code' => '+211', 'iso_code' => 'SS'],
        ['label' => 'Spain', 'country_code' => '+34', 'iso_code' => 'ES'],
        ['label' => 'Sri Lanka', 'country_code' => '+94', 'iso_code' => 'LK'],
        ['label' => 'Sudan', 'country_code' => '+249', 'iso_code' => 'SD'],
        ['label' => 'Suriname', 'country_code' => '+597', 'iso_code' => 'SR'],
        ['label' => 'Swaziland', 'country_code' => '+268', 'iso_code' => 'SZ'],
        ['label' => 'Sweden', 'country_code' => '+46', 'iso_code' => 'SE'],
        ['label' => 'Switzerland', 'country_code' => '+41', 'iso_code' => 'CH'],
        ['label' => 'Syria', 'country_code' => '+963', 'iso_code' => 'SY'],
        ['label' => 'Taiwan', 'country_code' => '+886', 'iso_code' => 'TW'],
        ['label' => 'Tajikistan', 'country_code' => '+992', 'iso_code' => 'TJ'],
        ['label' => 'Tanzania', 'country_code' => '+255', 'iso_code' => 'TZ'],
        ['label' => 'Thailand', 'country_code' => '+66', 'iso_code' => 'TH'],
        ['label' => 'Togo', 'country_code' => '+228', 'iso_code' => 'TG'],
        ['label' => 'Tonga', 'country_code' => '+676', 'iso_code' => 'TO'],
        ['label' => 'Trinidad and Tobago', 'country_code' => '+1-868', 'iso_code' => 'TT'],
        ['label' => 'Tunisia', 'country_code' => '+216', 'iso_code' => 'TN'],
        ['label' => 'Turkey', 'country_code' => '+90', 'iso_code' => 'TR'],
        ['label' => 'Turkmenistan', 'country_code' => '+993', 'iso_code' => 'TM'],
        ['label' => 'Turks and Caicos Islands', 'country_code' => '+1-649', 'country_code' => 'TC'],
        ['label' => 'Uganda', 'country_code' => '+256', 'iso_code' => 'UG'],
        ['label' => 'Ukraine', 'country_code' => '+380', 'iso_code' => 'UA'],
        ['label' => 'United Arab Emirates', 'country_code' => '+971', 'iso_code' => 'AE'],
        ['label' => 'United Kingdom', 'country_code' => '+44', 'iso_code' => 'GB'],
        ['label' => 'United States', 'country_code' => '+1', 'iso_code' => 'US'],
        ['label' => 'Uruguay', 'country_code' => '+598', 'iso_code' => 'UY'],
        ['label' => 'Uzbekistan', 'country_code' => '+998', 'iso_code' => 'UZ'],
        ['label' => 'Vanuatu', 'country_code' => '+678', 'iso_code' => 'VU'],
        ['label' => 'Venezuela', 'country_code' => '+58', 'iso_code' => 'VE'],
        ['label' => 'Vietnam', 'country_code' => '+84', 'iso_code' => 'VN'],
        ['label' => 'Virgin Islands (UK)', 'country_code' => '+1-284', 'iso_code' => 'VG'],
        ['label' => 'Virgin Islands (US)', 'country_code' => '+1-340', 'iso_code' => 'VI'],
        ['label' => 'Yemen', 'country_code' => '+967', 'iso_code' => 'YE'],
        ['label' => 'Zambia', 'country_code' => '+260', 'iso_code' => 'ZM'],
        ['label' => 'Zimbabwe', 'country_code' => '+263', 'iso_code' => 'ZW'],
    ];

    public function resolve($resource, $attribute = null)
    {
        parent::resolve($resource, $attribute);

        $this->withMeta([
            'iconsDirectory' => $this->iconsDirectory,
            'iconsFormat' => $this->iconsFormat,
            'options' => $this->options,
        ]);
    }

    public function options($options)
    {
        $this->options = $options;

        return $this;
    }

    public function iconsDirectory($iconsDirectory)
    {
        $this->iconsDirectory = $iconsDirectory;

        return $this;
    }

    public function iconsFormat($iconsFormat)
    {
        $this->iconsFormat = $iconsFormat;

        return $this;
    }
}
