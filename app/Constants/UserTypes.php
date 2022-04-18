<?php
namespace App\Constants;

class UserTypes
{
    const ADMIN    = 'admin';
    const SU_ADMIN = 'su_admin';
    const USER     = 'user';

    const MALE   = 'M';
    const FEMALE = 'F';

    /**
    * Backend Application User types and its universal codes
    *
    *
    */

    const ADMIN_ID   = 1;
    const ADMIN_CODE = 'admin';

    const DIRECTOR_ID   = 2;
    const DIRECTOR_CODE = 'DIRECTOR';

    const PRINCIPAL_ID   = 3;
    const PRINCIPAL_CODE = 'principal';

    const MANAGER_ID   = 4;
    const MANAGER_CODE = 'manager';

    const ACADAMIC_VICE_PRICIPAL_ID   = 5;
    const ACADAMIC_VICE_PRICIPAL_CODE = 'vp-acad';

    const LEAD_TEACHER_ID   = 6;
    const LEAD_TEACHER_CODE = 'lead_teacher';

    const TEACHER_ID   = 7;
    const TEACHER_CODE = 'teacher';

    const LAB_TECH_ID   =  8;
    const LAB_TECH_CODE = 'lab_techs';

    const STAFF_ID   = 9;
    const STAFF_CODE = 'staff';

    const HUMAN_RESOURCE_MANAGER_ID   = 10;
    const HUMAN_RESOURCE_MANAGER_CODE = 'hr-mngr';

    const SENIOR_MANAGER_ID   = 11;
    const SENIOR_MANAGER_CODE = 'smanager';

    const USER_AS_SYSTEM_ID   = 12;
    const USER_AS_SYSTEM_CODE = 'system';

    const EMAIL_TEMPLATE_EVALUATOR_ID   = 13;
    const EMAIL_TEMPLATE_EVALUATOR_CODE = 'evaluator';

    const EMAIL_TEMPLATE_EMPLOYEE_OR_STAFF_ID   = 14;
    const EMAIL_TEMPLATE_EMPLOYEE_OR_STAFF_CODE = 'employee';

    const VISE_PRICIPAL_OPERATIONAL_ID   = 15;
    const VISE_PRICIPAL_OPERATIONAL_CODE = 'vpo';

    const CAMPUS_HR_COORDINATOR_ID   = 16;
    const CAMPUS_HR_COORDINATOR_CODE = 'hr-mngr-campus';

    const CDU_SPECIALIST_ID   = 17;
    const CDU_SPECIALIST_CODE = 'cdu-specialist';

    const LIBRARIANS_ID   = 18;
    const LIBRARIANS_CODE = 'librarian';

    const MANAGEMENT_ID   = 19;
    const MANAGEMENT_CODE = 'management';

    const STUDENT_ID   = 20;
    const STUDENT_CODE = 'student';

    const PARENT_ID    = 21;
    const PARRENT_CODE = 'parent';

    const TEMP_USERS_ID   = 22;
    const TEMP_USER_CODE  = 'TEMP_USER';

    public static function getGenderListLetter()
    {
        return [UserTypes::MALE, UserTypes::FEMALE];
    }
}
