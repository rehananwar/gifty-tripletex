<?php
/**
 * PerDiemCompensation
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Tripletex API
 *
 * ## Usage  - **Download the spec** [swagger.json](/v2/swagger.json) file, it is a [OpenAPI Specification](https://github.com/OAI/OpenAPI-Specification).  - **Generating a client** can easily be done using tools like [swagger-codegen](https://github.com/swagger-api/swagger-codegen) or other that accepts [OpenAPI Specification](https://github.com/OAI/OpenAPI-Specification) specs.     - For swagger codegen it is recommended to use the flag: **--removeOperationIdPrefix**.        Unique operation ids are about to be introduced to the spec, and this ensures forward compatibility - and results in less verbose generated code.   ## Overview  - Partial resource updating is done using the `PUT` method with optional fields instead of the `PATCH` method.  - **Actions** or **commands** are represented in our RESTful path with a prefixed `:`. Example: `/v2/hours/123/:approve`.  - **Summaries** or **aggregated** results are represented in our RESTful path with a prefixed `>`. Example: `/v2/hours/>thisWeeksBillables`.  - **Request ID** is a key found in all responses in the header with the name `x-tlx-request-id`. For validation and error responses it is also in the response body. If additional log information is absolutely necessary, our support division can locate the key value.  - **version** This is a revision number found on all persisted resources. If included, it will prevent your PUT/POST from overriding any updates to the resource since your GET.  - **Date** follows the **[ISO 8601](https://en.wikipedia.org/wiki/ISO_8601)** standard, meaning the format `YYYY-MM-DD`.  - **DateTime** follows the **[ISO 8601](https://en.wikipedia.org/wiki/ISO_8601)** standard, meaning the format `YYYY-MM-DDThh:mm:ss`.  - **Searching** is done by entering values in the optional fields for each API call. The values fall into the following categories: range, in, exact and like.  - **Missing fields** or even **no response data** can occur because result objects and fields are filtered on authorization.  - **See [GitHub](https://github.com/Tripletex/tripletex-api2) for more documentation, examples, changelog and more.**  - **See [FAQ](https://tripletex.no/execute/docViewer?articleId=906&language=0) for additional information.**   ## Authentication  - **Tokens:** The Tripletex API uses 3 different tokens    - **consumerToken** is a token provided to the consumer by Tripletex after the API 2.0 registration is completed.    - **employeeToken** is a token created by an administrator in your Tripletex account via the user settings and the tab \"API access\". Each employee token must be given a set of entitlements. [Read more here.](https://tripletex.no/execute/docViewer?articleId=853&language=0)    - **sessionToken** is the token from `/token/session/:create` which requires a consumerToken and an employeeToken created with the same consumer token, but not an authentication header. See how to create a sessionToken [here](https://tripletex.no/execute/docViewer?articleId=855&language=0).  - **Authentication** is done via [Basic access authentication](https://en.wikipedia.org/wiki/Basic_access_authentication)    - **username** is used to specify what company to access.      - `0` or blank means the company of the employee.      - Any other value means accountant clients. Use `/company/>withLoginAccess` to get a list of those.    - **password** is the **sessionToken**.    - If you need to create the header yourself use `Authorization: Basic <encoded token>` where `encoded token` is the string `<target company id or 0>:<your session token>` Base64 encoded.   ## Tags  - `[BETA]` This is a beta endpoint and can be subject to change. - `[DEPRECATED]` Deprecated means that we intend to remove/change this feature or capability in a future \"major\" API release. We therefore discourage all use of this feature/capability.   ## Fields  Use the `fields` parameter to specify which fields should be returned. This also supports fields from sub elements, done via `<field>(<subResourceFields>)`. `*` means all fields for that resource. Example values: - `project,activity,hours`  returns `{project:..., activity:...., hours:...}`. - just `project` returns `\"project\" : { \"id\": 12345, \"url\": \"tripletex.no/v2/projects/12345\"  }`. - `project(*)` returns `\"project\" : { \"id\": 12345 \"name\":\"ProjectName\" \"number.....startDate\": \"2013-01-07\" }`. - `project(name)` returns `\"project\" : { \"name\":\"ProjectName\" }`. - All resources and some subResources :  `*,activity(name),employee(*)`.   ## Sorting  Use the `sorting` parameter to specify sorting. It takes a comma separated list, where a `-` prefix denotes descending. You can sort by sub object with the following format: `<field>.<subObjectField>`. Example values: - `date` - `project.name` - `project.name, -date`   ## Changes  To get the changes for a resource, `changes` have to be explicitly specified as part of the `fields` parameter, e.g. `*,changes`. There are currently two types of change available:  - `CREATE` for when the resource was created - `UPDATE` for when the resource was updated  **NOTE** > For objects created prior to October 24th 2018 the list may be incomplete, but will always contain the CREATE and the last change (if the object has been changed after creation).   ## Rate limiting  Rate limiting is performed on the API calls for an employee for each API consumer. Status regarding the rate limit is returned as headers: - `X-Rate-Limit-Limit` - The number of allowed requests in the current period. - `X-Rate-Limit-Remaining` - The number of remaining requests. - `X-Rate-Limit-Reset` - The number of seconds left in the current period.  Once the rate limit is hit, all requests will return HTTP status code `429` for the remainder of the current period.   ## Response envelope  #### Multiple values  ```json {   \"fullResultSize\": ###, // {number} [DEPRECATED]   \"from\": ###, // {number} Paging starting from   \"count\": ###, // {number} Paging count   \"versionDigest\": \"###\", // {string} Hash of full result, null if no result   \"values\": [...{...object...},{...object...},{...object...}...] } ```  #### Single value  ```json {   \"value\": {...single object...} } ```   ## WebHook envelope  ```json {   \"subscriptionId\": ###, // Subscription id   \"event\": \"object.verb\", // As listed from /v2/event/   \"id\": ###, // Id of object this event is for   \"value\": {... single object, null if object.deleted ...} } ```   ## Error/warning envelope  ```json {   \"status\": ###, // {number} HTTP status code   \"code\": #####, // {number} internal status code of event   \"message\": \"###\", // {string} Basic feedback message in your language   \"link\": \"###\", // {string} Link to doc   \"developerMessage\": \"###\", // {string} More technical message   \"validationMessages\": [ // {array} List of validation messages, can be null     {       \"field\": \"###\", // {string} Name of field       \"message\": \"###\" // {string} Validation message for field     }   ],   \"requestId\": \"###\" // {string} Same as x-tlx-request-id  } ```   ## Status codes / Error codes  - **200 OK** - **201 Created** - From POSTs that create something new. - **204 No Content** - When there is no answer, ex: \"/:anAction\" or DELETE. - **400 Bad request** -   -  **4000** Bad Request Exception   - **11000** Illegal Filter Exception   - **12000** Path Param Exception   - **24000** Cryptography Exception - **401 Unauthorized** - When authentication is required and has failed or has not yet been provided   -  **3000** Authentication Exception - **403 Forbidden** - When AuthorisationManager says no.   -  **9000** Security Exception - **404 Not Found** - For resources that does not exist.   -  **6000** Not Found Exception - **409 Conflict** - Such as an edit conflict between multiple simultaneous updates   -  **7000** Object Exists Exception   -  **8000** Revision Exception   - **10000** Locked Exception   - **14000** Duplicate entry - **422 Bad Request** - For Required fields or things like malformed payload.   - **15000** Value Validation Exception   - **16000** Mapping Exception   - **17000** Sorting Exception   - **18000** Validation Exception   - **21000** Param Exception   - **22000** Invalid JSON Exception   - **23000** Result Set Too Large Exception - **429 Too Many Requests** - Request rate limit hit - **500 Internal Error** - Unexpected condition was encountered and no more specific message is suitable   - **1000** Exception
 *
 * OpenAPI spec version: 2.62.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.24
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * PerDiemCompensation Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PerDiemCompensation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PerDiemCompensation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
'version' => 'int',
'changes' => '\Swagger\Client\Model\Change[]',
'url' => 'string',
'travel_expense' => '\Swagger\Client\Model\TravelExpense',
'rate_type' => '\Swagger\Client\Model\TravelExpenseRate',
'rate_category' => '\Swagger\Client\Model\TravelExpenseRateCategory',
'country_code' => 'string',
'travel_expense_zone_id' => 'int',
'overnight_accommodation' => 'string',
'location' => 'string',
'address' => 'string',
'count' => 'int',
'rate' => 'float',
'amount' => 'float',
'is_deduction_for_breakfast' => 'bool',
'is_deduction_for_lunch' => 'bool',
'is_deduction_for_dinner' => 'bool'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
'version' => 'int32',
'changes' => null,
'url' => null,
'travel_expense' => null,
'rate_type' => null,
'rate_category' => null,
'country_code' => null,
'travel_expense_zone_id' => 'int32',
'overnight_accommodation' => null,
'location' => null,
'address' => null,
'count' => 'int32',
'rate' => null,
'amount' => null,
'is_deduction_for_breakfast' => null,
'is_deduction_for_lunch' => null,
'is_deduction_for_dinner' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
'version' => 'version',
'changes' => 'changes',
'url' => 'url',
'travel_expense' => 'travelExpense',
'rate_type' => 'rateType',
'rate_category' => 'rateCategory',
'country_code' => 'countryCode',
'travel_expense_zone_id' => 'travelExpenseZoneId',
'overnight_accommodation' => 'overnightAccommodation',
'location' => 'location',
'address' => 'address',
'count' => 'count',
'rate' => 'rate',
'amount' => 'amount',
'is_deduction_for_breakfast' => 'isDeductionForBreakfast',
'is_deduction_for_lunch' => 'isDeductionForLunch',
'is_deduction_for_dinner' => 'isDeductionForDinner'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'version' => 'setVersion',
'changes' => 'setChanges',
'url' => 'setUrl',
'travel_expense' => 'setTravelExpense',
'rate_type' => 'setRateType',
'rate_category' => 'setRateCategory',
'country_code' => 'setCountryCode',
'travel_expense_zone_id' => 'setTravelExpenseZoneId',
'overnight_accommodation' => 'setOvernightAccommodation',
'location' => 'setLocation',
'address' => 'setAddress',
'count' => 'setCount',
'rate' => 'setRate',
'amount' => 'setAmount',
'is_deduction_for_breakfast' => 'setIsDeductionForBreakfast',
'is_deduction_for_lunch' => 'setIsDeductionForLunch',
'is_deduction_for_dinner' => 'setIsDeductionForDinner'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'version' => 'getVersion',
'changes' => 'getChanges',
'url' => 'getUrl',
'travel_expense' => 'getTravelExpense',
'rate_type' => 'getRateType',
'rate_category' => 'getRateCategory',
'country_code' => 'getCountryCode',
'travel_expense_zone_id' => 'getTravelExpenseZoneId',
'overnight_accommodation' => 'getOvernightAccommodation',
'location' => 'getLocation',
'address' => 'getAddress',
'count' => 'getCount',
'rate' => 'getRate',
'amount' => 'getAmount',
'is_deduction_for_breakfast' => 'getIsDeductionForBreakfast',
'is_deduction_for_lunch' => 'getIsDeductionForLunch',
'is_deduction_for_dinner' => 'getIsDeductionForDinner'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    const OVERNIGHT_ACCOMMODATION_NONE = 'NONE';
const OVERNIGHT_ACCOMMODATION_HOTEL = 'HOTEL';
const OVERNIGHT_ACCOMMODATION_BOARDING_HOUSE_WITHOUT_COOKING = 'BOARDING_HOUSE_WITHOUT_COOKING';
const OVERNIGHT_ACCOMMODATION_BOARDING_HOUSE_WITH_COOKING = 'BOARDING_HOUSE_WITH_COOKING';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOvernightAccommodationAllowableValues()
    {
        return [
            self::OVERNIGHT_ACCOMMODATION_NONE,
self::OVERNIGHT_ACCOMMODATION_HOTEL,
self::OVERNIGHT_ACCOMMODATION_BOARDING_HOUSE_WITHOUT_COOKING,
self::OVERNIGHT_ACCOMMODATION_BOARDING_HOUSE_WITH_COOKING,        ];
    }

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['changes'] = isset($data['changes']) ? $data['changes'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['travel_expense'] = isset($data['travel_expense']) ? $data['travel_expense'] : null;
        $this->container['rate_type'] = isset($data['rate_type']) ? $data['rate_type'] : null;
        $this->container['rate_category'] = isset($data['rate_category']) ? $data['rate_category'] : null;
        $this->container['country_code'] = isset($data['country_code']) ? $data['country_code'] : null;
        $this->container['travel_expense_zone_id'] = isset($data['travel_expense_zone_id']) ? $data['travel_expense_zone_id'] : null;
        $this->container['overnight_accommodation'] = isset($data['overnight_accommodation']) ? $data['overnight_accommodation'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['rate'] = isset($data['rate']) ? $data['rate'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['is_deduction_for_breakfast'] = isset($data['is_deduction_for_breakfast']) ? $data['is_deduction_for_breakfast'] : null;
        $this->container['is_deduction_for_lunch'] = isset($data['is_deduction_for_lunch']) ? $data['is_deduction_for_lunch'] : null;
        $this->container['is_deduction_for_dinner'] = isset($data['is_deduction_for_dinner']) ? $data['is_deduction_for_dinner'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getOvernightAccommodationAllowableValues();
        if (!is_null($this->container['overnight_accommodation']) && !in_array($this->container['overnight_accommodation'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'overnight_accommodation', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['location'] === null) {
            $invalidProperties[] = "'location' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets version
     *
     * @return int
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param int $version version
     *
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets changes
     *
     * @return \Swagger\Client\Model\Change[]
     */
    public function getChanges()
    {
        return $this->container['changes'];
    }

    /**
     * Sets changes
     *
     * @param \Swagger\Client\Model\Change[] $changes changes
     *
     * @return $this
     */
    public function setChanges($changes)
    {
        $this->container['changes'] = $changes;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url url
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets travel_expense
     *
     * @return \Swagger\Client\Model\TravelExpense
     */
    public function getTravelExpense()
    {
        return $this->container['travel_expense'];
    }

    /**
     * Sets travel_expense
     *
     * @param \Swagger\Client\Model\TravelExpense $travel_expense travel_expense
     *
     * @return $this
     */
    public function setTravelExpense($travel_expense)
    {
        $this->container['travel_expense'] = $travel_expense;

        return $this;
    }

    /**
     * Gets rate_type
     *
     * @return \Swagger\Client\Model\TravelExpenseRate
     */
    public function getRateType()
    {
        return $this->container['rate_type'];
    }

    /**
     * Sets rate_type
     *
     * @param \Swagger\Client\Model\TravelExpenseRate $rate_type rate_type
     *
     * @return $this
     */
    public function setRateType($rate_type)
    {
        $this->container['rate_type'] = $rate_type;

        return $this;
    }

    /**
     * Gets rate_category
     *
     * @return \Swagger\Client\Model\TravelExpenseRateCategory
     */
    public function getRateCategory()
    {
        return $this->container['rate_category'];
    }

    /**
     * Sets rate_category
     *
     * @param \Swagger\Client\Model\TravelExpenseRateCategory $rate_category rate_category
     *
     * @return $this
     */
    public function setRateCategory($rate_category)
    {
        $this->container['rate_category'] = $rate_category;

        return $this;
    }

    /**
     * Gets country_code
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code
     *
     * @param string $country_code country_code
     *
     * @return $this
     */
    public function setCountryCode($country_code)
    {
        $this->container['country_code'] = $country_code;

        return $this;
    }

    /**
     * Gets travel_expense_zone_id
     *
     * @return int
     */
    public function getTravelExpenseZoneId()
    {
        return $this->container['travel_expense_zone_id'];
    }

    /**
     * Sets travel_expense_zone_id
     *
     * @param int $travel_expense_zone_id Optional travel expense zone id. If not specified, the value from field zone will be used.
     *
     * @return $this
     */
    public function setTravelExpenseZoneId($travel_expense_zone_id)
    {
        $this->container['travel_expense_zone_id'] = $travel_expense_zone_id;

        return $this;
    }

    /**
     * Gets overnight_accommodation
     *
     * @return string
     */
    public function getOvernightAccommodation()
    {
        return $this->container['overnight_accommodation'];
    }

    /**
     * Sets overnight_accommodation
     *
     * @param string $overnight_accommodation Set what sort of accommodation was had overnight.
     *
     * @return $this
     */
    public function setOvernightAccommodation($overnight_accommodation)
    {
        $allowedValues = $this->getOvernightAccommodationAllowableValues();
        if (!is_null($overnight_accommodation) && !in_array($overnight_accommodation, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'overnight_accommodation', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['overnight_accommodation'] = $overnight_accommodation;

        return $this;
    }

    /**
     * Gets location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param string $location location
     *
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string $address address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets count
     *
     * @return int
     */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
     * Sets count
     *
     * @param int $count count
     *
     * @return $this
     */
    public function setCount($count)
    {
        $this->container['count'] = $count;

        return $this;
    }

    /**
     * Gets rate
     *
     * @return float
     */
    public function getRate()
    {
        return $this->container['rate'];
    }

    /**
     * Sets rate
     *
     * @param float $rate rate
     *
     * @return $this
     */
    public function setRate($rate)
    {
        $this->container['rate'] = $rate;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param float $amount amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets is_deduction_for_breakfast
     *
     * @return bool
     */
    public function getIsDeductionForBreakfast()
    {
        return $this->container['is_deduction_for_breakfast'];
    }

    /**
     * Sets is_deduction_for_breakfast
     *
     * @param bool $is_deduction_for_breakfast is_deduction_for_breakfast
     *
     * @return $this
     */
    public function setIsDeductionForBreakfast($is_deduction_for_breakfast)
    {
        $this->container['is_deduction_for_breakfast'] = $is_deduction_for_breakfast;

        return $this;
    }

    /**
     * Gets is_deduction_for_lunch
     *
     * @return bool
     */
    public function getIsDeductionForLunch()
    {
        return $this->container['is_deduction_for_lunch'];
    }

    /**
     * Sets is_deduction_for_lunch
     *
     * @param bool $is_deduction_for_lunch is_deduction_for_lunch
     *
     * @return $this
     */
    public function setIsDeductionForLunch($is_deduction_for_lunch)
    {
        $this->container['is_deduction_for_lunch'] = $is_deduction_for_lunch;

        return $this;
    }

    /**
     * Gets is_deduction_for_dinner
     *
     * @return bool
     */
    public function getIsDeductionForDinner()
    {
        return $this->container['is_deduction_for_dinner'];
    }

    /**
     * Sets is_deduction_for_dinner
     *
     * @param bool $is_deduction_for_dinner is_deduction_for_dinner
     *
     * @return $this
     */
    public function setIsDeductionForDinner($is_deduction_for_dinner)
    {
        $this->container['is_deduction_for_dinner'] = $is_deduction_for_dinner;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
