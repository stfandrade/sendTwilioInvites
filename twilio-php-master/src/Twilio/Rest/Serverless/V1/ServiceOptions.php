<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Serverless\V1;

use Twilio\Options;
use Twilio\Values;

/**
 * PLEASE NOTE that this class contains preview products that are subject to change. Use them with caution. If you currently do not have developer preview access, please contact help@twilio.com.
 */
abstract class ServiceOptions {
    /**
     * @param bool $includeCredentials Whether to inject Account credentials into a
     *                                 function invocation context
     * @param bool $uiEditable Whether the Service's properties and subresources
     *                         can be edited via the UI
     * @return CreateServiceOptions Options builder
     */
    public static function create(bool $includeCredentials = Values::NONE, bool $uiEditable = Values::NONE): CreateServiceOptions {
        return new CreateServiceOptions($includeCredentials, $uiEditable);
    }

    /**
     * @param bool $includeCredentials Whether to inject Account credentials into a
     *                                 function invocation context
     * @param string $friendlyName A string to describe the Service resource
     * @param bool $uiEditable Whether the Service's properties and subresources
     *                         can be edited via the UI
     * @return UpdateServiceOptions Options builder
     */
    public static function update(bool $includeCredentials = Values::NONE, string $friendlyName = Values::NONE, bool $uiEditable = Values::NONE): UpdateServiceOptions {
        return new UpdateServiceOptions($includeCredentials, $friendlyName, $uiEditable);
    }
}

class CreateServiceOptions extends Options {
    /**
     * @param bool $includeCredentials Whether to inject Account credentials into a
     *                                 function invocation context
     * @param bool $uiEditable Whether the Service's properties and subresources
     *                         can be edited via the UI
     */
    public function __construct(bool $includeCredentials = Values::NONE, bool $uiEditable = Values::NONE) {
        $this->options['includeCredentials'] = $includeCredentials;
        $this->options['uiEditable'] = $uiEditable;
    }

    /**
     * Whether to inject Account credentials into a function invocation context. The default value is `false`.
     *
     * @param bool $includeCredentials Whether to inject Account credentials into a
     *                                 function invocation context
     * @return $this Fluent Builder
     */
    public function setIncludeCredentials(bool $includeCredentials): self {
        $this->options['includeCredentials'] = $includeCredentials;
        return $this;
    }

    /**
     * Whether the Service's properties and subresources can be edited via the UI. The default value is `false`.
     *
     * @param bool $uiEditable Whether the Service's properties and subresources
     *                         can be edited via the UI
     * @return $this Fluent Builder
     */
    public function setUiEditable(bool $uiEditable): self {
        $this->options['uiEditable'] = $uiEditable;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Serverless.V1.CreateServiceOptions ' . $options . ']';
    }
}

class UpdateServiceOptions extends Options {
    /**
     * @param bool $includeCredentials Whether to inject Account credentials into a
     *                                 function invocation context
     * @param string $friendlyName A string to describe the Service resource
     * @param bool $uiEditable Whether the Service's properties and subresources
     *                         can be edited via the UI
     */
    public function __construct(bool $includeCredentials = Values::NONE, string $friendlyName = Values::NONE, bool $uiEditable = Values::NONE) {
        $this->options['includeCredentials'] = $includeCredentials;
        $this->options['friendlyName'] = $friendlyName;
        $this->options['uiEditable'] = $uiEditable;
    }

    /**
     * Whether to inject Account credentials into a function invocation context.
     *
     * @param bool $includeCredentials Whether to inject Account credentials into a
     *                                 function invocation context
     * @return $this Fluent Builder
     */
    public function setIncludeCredentials(bool $includeCredentials): self {
        $this->options['includeCredentials'] = $includeCredentials;
        return $this;
    }

    /**
     * A descriptive string that you create to describe the Service resource. It can be up to 255 characters long.
     *
     * @param string $friendlyName A string to describe the Service resource
     * @return $this Fluent Builder
     */
    public function setFriendlyName(string $friendlyName): self {
        $this->options['friendlyName'] = $friendlyName;
        return $this;
    }

    /**
     * Whether the Service's properties and subresources can be edited via the UI. The default value is `false`.
     *
     * @param bool $uiEditable Whether the Service's properties and subresources
     *                         can be edited via the UI
     * @return $this Fluent Builder
     */
    public function setUiEditable(bool $uiEditable): self {
        $this->options['uiEditable'] = $uiEditable;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Serverless.V1.UpdateServiceOptions ' . $options . ']';
    }
}