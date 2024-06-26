<?php
// GENERATED CODE -- DO NOT EDIT!

// Original file comments:
// Copyright 2021 Google LLC
//
// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at
//
//     http://www.apache.org/licenses/LICENSE-2.0
//
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.
//
namespace Google\Cloud\ResourceManager\V3;

/**
 * Manages Google Cloud Projects.
 */
class ProjectsGrpcClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Retrieves the project identified by the specified `name` (for example,
     * `projects/415104041262`).
     *
     * The caller must have `resourcemanager.projects.get` permission
     * for this project.
     * @param \Google\Cloud\ResourceManager\V3\GetProjectRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetProject(\Google\Cloud\ResourceManager\V3\GetProjectRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.resourcemanager.v3.Projects/GetProject',
        $argument,
        ['\Google\Cloud\ResourceManager\V3\Project', 'decode'],
        $metadata, $options);
    }

    /**
     * Lists projects that are direct children of the specified folder or
     * organization resource. `list()` provides a strongly consistent view of the
     * projects underneath the specified parent resource. `list()` returns
     * projects sorted based upon the (ascending) lexical ordering of their
     * `display_name`. The caller must have `resourcemanager.projects.list`
     * permission on the identified parent.
     * @param \Google\Cloud\ResourceManager\V3\ListProjectsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListProjects(\Google\Cloud\ResourceManager\V3\ListProjectsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.resourcemanager.v3.Projects/ListProjects',
        $argument,
        ['\Google\Cloud\ResourceManager\V3\ListProjectsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Search for projects that the caller has both `resourcemanager.projects.get`
     * permission on, and also satisfy the specified query.
     *
     * This method returns projects in an unspecified order.
     *
     * This method is eventually consistent with project mutations; this means
     * that a newly created project may not appear in the results or recent
     * updates to an existing project may not be reflected in the results. To
     * retrieve the latest state of a project, use the
     * [GetProject][google.cloud.resourcemanager.v3.Projects.GetProject] method.
     * @param \Google\Cloud\ResourceManager\V3\SearchProjectsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SearchProjects(\Google\Cloud\ResourceManager\V3\SearchProjectsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.resourcemanager.v3.Projects/SearchProjects',
        $argument,
        ['\Google\Cloud\ResourceManager\V3\SearchProjectsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Request that a new project be created. The result is an `Operation` which
     * can be used to track the creation process. This process usually takes a few
     * seconds, but can sometimes take much longer. The tracking `Operation` is
     * automatically deleted after a few hours, so there is no need to call
     * `DeleteOperation`.
     * @param \Google\Cloud\ResourceManager\V3\CreateProjectRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateProject(\Google\Cloud\ResourceManager\V3\CreateProjectRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.resourcemanager.v3.Projects/CreateProject',
        $argument,
        ['\Google\LongRunning\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * Updates the `display_name` and labels of the project identified by the
     * specified `name` (for example, `projects/415104041262`). Deleting all
     * labels requires an update mask for labels field.
     *
     * The caller must have `resourcemanager.projects.update` permission for this
     * project.
     * @param \Google\Cloud\ResourceManager\V3\UpdateProjectRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateProject(\Google\Cloud\ResourceManager\V3\UpdateProjectRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.resourcemanager.v3.Projects/UpdateProject',
        $argument,
        ['\Google\LongRunning\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * Move a project to another place in your resource hierarchy, under a new
     * resource parent.
     *
     * Returns an operation which can be used to track the process of the project
     * move workflow.
     * Upon success, the `Operation.response` field will be populated with the
     * moved project.
     *
     * The caller must have `resourcemanager.projects.update` permission on the
     * project and have `resourcemanager.projects.move` permission on the
     * project's current and proposed new parent.
     *
     *
     * @param \Google\Cloud\ResourceManager\V3\MoveProjectRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function MoveProject(\Google\Cloud\ResourceManager\V3\MoveProjectRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.resourcemanager.v3.Projects/MoveProject',
        $argument,
        ['\Google\LongRunning\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * Marks the project identified by the specified
     * `name` (for example, `projects/415104041262`) for deletion.
     *
     * This method will only affect the project if it has a lifecycle state of
     * [ACTIVE][google.cloud.resourcemanager.v3.Project.State.ACTIVE].
     *
     * This method changes the Project's lifecycle state from
     * [ACTIVE][google.cloud.resourcemanager.v3.Project.State.ACTIVE]
     * to [DELETE_REQUESTED][google.cloud.resourcemanager.v3.Project.State.DELETE_REQUESTED].
     * The deletion starts at an unspecified time,
     * at which point the Project is no longer accessible.
     *
     * Until the deletion completes, you can check the lifecycle state
     * checked by retrieving the project with [GetProject]
     * [google.cloud.resourcemanager.v3.Projects.GetProject],
     * and the project remains visible to [ListProjects]
     * [google.cloud.resourcemanager.v3.Projects.ListProjects].
     * However, you cannot update the project.
     *
     * After the deletion completes, the project is not retrievable by
     * the  [GetProject]
     * [google.cloud.resourcemanager.v3.Projects.GetProject],
     * [ListProjects]
     * [google.cloud.resourcemanager.v3.Projects.ListProjects], and
     * [SearchProjects][google.cloud.resourcemanager.v3.Projects.SearchProjects]
     * methods.
     *
     * This method behaves idempotently, such that deleting a `DELETE_REQUESTED`
     * project will not cause an error, but also won't do anything.
     *
     * The caller must have `resourcemanager.projects.delete` permissions for this
     * project.
     * @param \Google\Cloud\ResourceManager\V3\DeleteProjectRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteProject(\Google\Cloud\ResourceManager\V3\DeleteProjectRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.resourcemanager.v3.Projects/DeleteProject',
        $argument,
        ['\Google\LongRunning\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * Restores the project identified by the specified
     * `name` (for example, `projects/415104041262`).
     * You can only use this method for a project that has a lifecycle state of
     * [DELETE_REQUESTED]
     * [Projects.State.DELETE_REQUESTED].
     * After deletion starts, the project cannot be restored.
     *
     * The caller must have `resourcemanager.projects.undelete` permission for
     * this project.
     * @param \Google\Cloud\ResourceManager\V3\UndeleteProjectRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UndeleteProject(\Google\Cloud\ResourceManager\V3\UndeleteProjectRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.resourcemanager.v3.Projects/UndeleteProject',
        $argument,
        ['\Google\LongRunning\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * Returns the IAM access control policy for the specified project.
     * Permission is denied if the policy or the resource do not exist.
     * @param \Google\Cloud\Iam\V1\GetIamPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetIamPolicy(\Google\Cloud\Iam\V1\GetIamPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.resourcemanager.v3.Projects/GetIamPolicy',
        $argument,
        ['\Google\Cloud\Iam\V1\Policy', 'decode'],
        $metadata, $options);
    }

    /**
     * Sets the IAM access control policy for the specified project.
     *
     * CAUTION: This method will replace the existing policy, and cannot be used
     * to append additional IAM settings.
     *
     * Note: Removing service accounts from policies or changing their roles can
     * render services completely inoperable. It is important to understand how
     * the service account is being used before removing or updating its roles.
     *
     * The following constraints apply when using `setIamPolicy()`:
     *
     * + Project does not support `allUsers` and `allAuthenticatedUsers` as
     * `members` in a `Binding` of a `Policy`.
     *
     * + The owner role can be granted to a `user`, `serviceAccount`, or a group
     * that is part of an organization. For example,
     * group@myownpersonaldomain.com could be added as an owner to a project in
     * the myownpersonaldomain.com organization, but not the examplepetstore.com
     * organization.
     *
     * + Service accounts can be made owners of a project directly
     * without any restrictions. However, to be added as an owner, a user must be
     * invited using the Cloud Platform console and must accept the invitation.
     *
     * + A user cannot be granted the owner role using `setIamPolicy()`. The user
     * must be granted the owner role using the Cloud Platform Console and must
     * explicitly accept the invitation.
     *
     * + Invitations to grant the owner role cannot be sent using
     * `setIamPolicy()`;
     * they must be sent only using the Cloud Platform Console.
     *
     * + Membership changes that leave the project without any owners that have
     * accepted the Terms of Service (ToS) will be rejected.
     *
     * + If the project is not part of an organization, there must be at least
     * one owner who has accepted the Terms of Service (ToS) agreement in the
     * policy. Calling `setIamPolicy()` to remove the last ToS-accepted owner
     * from the policy will fail. This restriction also applies to legacy
     * projects that no longer have owners who have accepted the ToS. Edits to
     * IAM policies will be rejected until the lack of a ToS-accepting owner is
     * rectified.
     *
     * + Calling this method requires enabling the App Engine Admin API.
     * @param \Google\Cloud\Iam\V1\SetIamPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetIamPolicy(\Google\Cloud\Iam\V1\SetIamPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.resourcemanager.v3.Projects/SetIamPolicy',
        $argument,
        ['\Google\Cloud\Iam\V1\Policy', 'decode'],
        $metadata, $options);
    }

    /**
     * Returns permissions that a caller has on the specified project.
     * @param \Google\Cloud\Iam\V1\TestIamPermissionsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function TestIamPermissions(\Google\Cloud\Iam\V1\TestIamPermissionsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.resourcemanager.v3.Projects/TestIamPermissions',
        $argument,
        ['\Google\Cloud\Iam\V1\TestIamPermissionsResponse', 'decode'],
        $metadata, $options);
    }

}
