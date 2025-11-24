# Templates Index

## Navigation

**You are here:** Documentation → Templates Index

Related documents:

* [Documentation Index](./index.md)
* [Architecture Guide](./architecture.md)
* [Data Model Guide](./data-model.md)
* [Security Guide](./security.md)
* [Testing Guide](./testing.md)
* [Governance Guide](./governance.md)
* [Operations Guide](./operations.md)

## 1. Purpose

This index provides a consolidated reference to all templates used across the documentation and governance ecosystem. Each template supports repeatable, high-quality processes across engineering, security, operations, and governance.

All templates in this suite are stored in:

```
docs/templates/
```

## 2. Template Portfolio

### 2.1 Architectural Templates

**ADR Template** → [adr.md](./adr.md)
Records key architectural decisions, context, alternatives, and consequences.

### 2.2 API Templates

**API Endpoint Template** → [api-endpoint.md](./api-endpoint.md)
Defines request structures, responses, constraints, and security requirements.

### 2.3 Operational Templates

**Escalation Template** → [escalation.md](./escalation.md)
Defines escalation triggers, pathways, severity levels, and communications.

**Incident Report Template** → [incident-report.md](./incident-report.md)
Captures events, timelines, root causes, impacts, and corrective actions.

**Migration Plan Template** → [migration-plan.md](./migration-plan.md)
Outlines migration steps, validation, rollback, and stakeholder alignment.

**Runbook Template** → [runbook.md](./runbook.md)
Provides step-by-step operational procedures and recovery criteria.

**Release Template** → [release.md](./release.md)
Documents release scope, deployment sequencing, validation, and communications.

### 2.4 Governance and Risk Templates

**Pull Request Template** → [pull-request.md](./pull-request.md)
Ensures structured review and compliance with engineering standards.

**Risk Register Entry Template** → [risk-register-entry.md](./risk-register-entry.md)
Captures risk statements, probability, impact scoring, and mitigation strategies.

### 2.5 Security and Compliance Templates

**Security Review Template** → [security-review.md](./security-review.md)
Evaluates threat models, findings, remediations, and approval requirements.

**Style and Compliance Checklist Template** → [style-compliance-checklist.md](./style-compliance-checklist.md)
Ensures alignment with documentation style, compliance, and accessibility standards.

## 3. Template Requirements

All templates must:

* Provide clear placeholders for consistent authoring
* Reference related documentation where applicable

Templates must be updated when:

* Standards evolve
* New systems or roles are introduced
* Governance requirements change

## Metadata

```
Owner: Documentation Lead
Reviewers: Governance, Architecture, Operations
Status: Active
Last Updated: <YYYY-MM-DD>
```

## Revision History

| Date       | Version | Author | Notes        |
| ---------- | ------- | ------ | ------------ |
| 2025-11-23 | 0.0.1   | TBD    | Initial stub |
