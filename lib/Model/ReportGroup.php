<?php
/**
 * ReportGroup
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
 * ReportGroup Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ReportGroup implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ReportGroup';

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
'name' => 'string',
'description' => 'string',
'auto_group_type' => 'string',
'expression' => 'string',
'variable_name' => 'string',
'precedence' => 'int',
'value_format' => 'string',
'cell_format' => 'string',
'hide_self' => 'bool',
'filter' => '\Swagger\Client\Model\ReportGroupFilter',
'children' => '\Swagger\Client\Model\ReportGroup[]'    ];

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
'name' => null,
'description' => null,
'auto_group_type' => null,
'expression' => null,
'variable_name' => null,
'precedence' => 'int32',
'value_format' => null,
'cell_format' => null,
'hide_self' => null,
'filter' => null,
'children' => null    ];

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
'name' => 'name',
'description' => 'description',
'auto_group_type' => 'autoGroupType',
'expression' => 'expression',
'variable_name' => 'variableName',
'precedence' => 'precedence',
'value_format' => 'valueFormat',
'cell_format' => 'cellFormat',
'hide_self' => 'hideSelf',
'filter' => 'filter',
'children' => 'children'    ];

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
'name' => 'setName',
'description' => 'setDescription',
'auto_group_type' => 'setAutoGroupType',
'expression' => 'setExpression',
'variable_name' => 'setVariableName',
'precedence' => 'setPrecedence',
'value_format' => 'setValueFormat',
'cell_format' => 'setCellFormat',
'hide_self' => 'setHideSelf',
'filter' => 'setFilter',
'children' => 'setChildren'    ];

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
'name' => 'getName',
'description' => 'getDescription',
'auto_group_type' => 'getAutoGroupType',
'expression' => 'getExpression',
'variable_name' => 'getVariableName',
'precedence' => 'getPrecedence',
'value_format' => 'getValueFormat',
'cell_format' => 'getCellFormat',
'hide_self' => 'getHideSelf',
'filter' => 'getFilter',
'children' => 'getChildren'    ];

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

    const AUTO_GROUP_TYPE_NONE = 'None';
const AUTO_GROUP_TYPE_ACCOUNT = 'Account';
const AUTO_GROUP_TYPE_DEPARTMENT = 'Department';
const AUTO_GROUP_TYPE_CUSTOMER = 'Customer';
const AUTO_GROUP_TYPE_SUPPLIER = 'Supplier';
const AUTO_GROUP_TYPE_EMPLOYEE = 'Employee';
const AUTO_GROUP_TYPE_PRODUCT = 'Product';
const AUTO_GROUP_TYPE_PROJECT = 'Project';
const AUTO_GROUP_TYPE_PERIOD_MONTHS = 'PeriodMonths';
const AUTO_GROUP_TYPE_PERIOD_YEARS = 'PeriodYears';
const AUTO_GROUP_TYPE_PERIOD_QUARTERS = 'PeriodQuarters';
const AUTO_GROUP_TYPE_PERIOD_VAT_TERMS = 'PeriodVATTerms';
const AUTO_GROUP_TYPE_PERIOD_WEEKS = 'PeriodWeeks';
const AUTO_GROUP_TYPE_PERIOD_DAYS = 'PeriodDays';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAutoGroupTypeAllowableValues()
    {
        return [
            self::AUTO_GROUP_TYPE_NONE,
self::AUTO_GROUP_TYPE_ACCOUNT,
self::AUTO_GROUP_TYPE_DEPARTMENT,
self::AUTO_GROUP_TYPE_CUSTOMER,
self::AUTO_GROUP_TYPE_SUPPLIER,
self::AUTO_GROUP_TYPE_EMPLOYEE,
self::AUTO_GROUP_TYPE_PRODUCT,
self::AUTO_GROUP_TYPE_PROJECT,
self::AUTO_GROUP_TYPE_PERIOD_MONTHS,
self::AUTO_GROUP_TYPE_PERIOD_YEARS,
self::AUTO_GROUP_TYPE_PERIOD_QUARTERS,
self::AUTO_GROUP_TYPE_PERIOD_VAT_TERMS,
self::AUTO_GROUP_TYPE_PERIOD_WEEKS,
self::AUTO_GROUP_TYPE_PERIOD_DAYS,        ];
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['auto_group_type'] = isset($data['auto_group_type']) ? $data['auto_group_type'] : null;
        $this->container['expression'] = isset($data['expression']) ? $data['expression'] : null;
        $this->container['variable_name'] = isset($data['variable_name']) ? $data['variable_name'] : null;
        $this->container['precedence'] = isset($data['precedence']) ? $data['precedence'] : null;
        $this->container['value_format'] = isset($data['value_format']) ? $data['value_format'] : null;
        $this->container['cell_format'] = isset($data['cell_format']) ? $data['cell_format'] : null;
        $this->container['hide_self'] = isset($data['hide_self']) ? $data['hide_self'] : null;
        $this->container['filter'] = isset($data['filter']) ? $data['filter'] : null;
        $this->container['children'] = isset($data['children']) ? $data['children'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['auto_group_type'] === null) {
            $invalidProperties[] = "'auto_group_type' can't be null";
        }
        $allowedValues = $this->getAutoGroupTypeAllowableValues();
        if (!is_null($this->container['auto_group_type']) && !in_array($this->container['auto_group_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'auto_group_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name The name to be shown for the column or row.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description Currently not in use
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets auto_group_type
     *
     * @return string
     */
    public function getAutoGroupType()
    {
        return $this->container['auto_group_type'];
    }

    /**
     * Sets auto_group_type
     *
     * @param string $auto_group_type Subgroups that should be automatically generated
     *
     * @return $this
     */
    public function setAutoGroupType($auto_group_type)
    {
        $allowedValues = $this->getAutoGroupTypeAllowableValues();
        if (!in_array($auto_group_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'auto_group_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['auto_group_type'] = $auto_group_type;

        return $this;
    }

    /**
     * Gets expression
     *
     * @return string
     */
    public function getExpression()
    {
        return $this->container['expression'];
    }

    /**
     * Sets expression
     *
     * @param string $expression Expression / formula according to Rule Engine Expression Language
     *
     * @return $this
     */
    public function setExpression($expression)
    {
        $this->container['expression'] = $expression;

        return $this;
    }

    /**
     * Gets variable_name
     *
     * @return string
     */
    public function getVariableName()
    {
        return $this->container['variable_name'];
    }

    /**
     * Sets variable_name
     *
     * @param string $variable_name Variable name that can be used to reference this group
     *
     * @return $this
     */
    public function setVariableName($variable_name)
    {
        $this->container['variable_name'] = $variable_name;

        return $this;
    }

    /**
     * Gets precedence
     *
     * @return int
     */
    public function getPrecedence()
    {
        return $this->container['precedence'];
    }

    /**
     * Sets precedence
     *
     * @param int $precedence Used to select expression if both column and row expression is set. The bigger value wins.
     *
     * @return $this
     */
    public function setPrecedence($precedence)
    {
        $this->container['precedence'] = $precedence;

        return $this;
    }

    /**
     * Gets value_format
     *
     * @return string
     */
    public function getValueFormat()
    {
        return $this->container['value_format'];
    }

    /**
     * Sets value_format
     *
     * @param string $value_format Format string for value (how to print number, date etc)
     *
     * @return $this
     */
    public function setValueFormat($value_format)
    {
        $this->container['value_format'] = $value_format;

        return $this;
    }

    /**
     * Gets cell_format
     *
     * @return string
     */
    public function getCellFormat()
    {
        return $this->container['cell_format'];
    }

    /**
     * Sets cell_format
     *
     * @param string $cell_format Format string for cell (indentation, font size etc)
     *
     * @return $this
     */
    public function setCellFormat($cell_format)
    {
        $this->container['cell_format'] = $cell_format;

        return $this;
    }

    /**
     * Gets hide_self
     *
     * @return bool
     */
    public function getHideSelf()
    {
        return $this->container['hide_self'];
    }

    /**
     * Sets hide_self
     *
     * @param bool $hide_self Hide this group?
     *
     * @return $this
     */
    public function setHideSelf($hide_self)
    {
        $this->container['hide_self'] = $hide_self;

        return $this;
    }

    /**
     * Gets filter
     *
     * @return \Swagger\Client\Model\ReportGroupFilter
     */
    public function getFilter()
    {
        return $this->container['filter'];
    }

    /**
     * Sets filter
     *
     * @param \Swagger\Client\Model\ReportGroupFilter $filter filter
     *
     * @return $this
     */
    public function setFilter($filter)
    {
        $this->container['filter'] = $filter;

        return $this;
    }

    /**
     * Gets children
     *
     * @return \Swagger\Client\Model\ReportGroup[]
     */
    public function getChildren()
    {
        return $this->container['children'];
    }

    /**
     * Sets children
     *
     * @param \Swagger\Client\Model\ReportGroup[] $children Child groups
     *
     * @return $this
     */
    public function setChildren($children)
    {
        $this->container['children'] = $children;

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
