# QBPOS 10.0 Report — Findings & Recommendations

**Summary of the problem:** The client is running **QuickBooks Point of Sale 10.0** on slow, aging Windows machines. The system is increasingly flaky, and QBPOS is legacy/EOL-era software with no modern support path. The business wants to avoid disruption and avoid high recurring software costs.

---

## Executive Summary

QBPOS 10.0 is end-of-life and running on aging hardware. Risk of an unplanned, catastrophic outage (license failure, database corruption, hardware death) grows every month it stays in production. **Recommendation: begin a phased move to a modern, supported POS platform now** — evaluating **Shopify POS**, **KORONA**, and **Loyverse** over the next 2–4 weeks — rather than waiting for a failure to force the decision. A same-hardware migration (Plan 2) is only a short-term bridge, not a long-term fix.

---

## Recommended alternatives first (with pricing)

| Rank | Software | Typical price (entry) | Why it’s a fit | Main trade-off |
|---|---|---:|---|---|
| 1 | **Shopify POS** | POS Pro about **$89/location/mo** (+ Shopify plan) | Best all-around modern retail stack, strong inventory + multi-location, good ecosystem | Recurring cost; workflow changes from desktop-era POS |
| 2 | **KORONA POS** | About **$59–$99/mo** | Retail-focused inventory/reporting, predictable SMB pricing | Integration/setup effort may be higher than plug-and-play |
| 3 | **Loyverse POS** | **Free core**, paid add-ons (commonly ~$5–$25/store/mo modules) | Lowest-cost practical path, good baseline POS features | Advanced controls/reporting often require add-ons/workarounds |
| 4 | Clover | Varies by hardware/plan; low entry software tiers exist | Strong SMB hardware + in-store ecosystem | Contract/pricing complexity via reseller channels |
| 5 | Odoo POS | Free tier possible; paid app/user tiers | Very customizable; can grow into ERP-style operations | More implementation overhead |
| 6 | RetailEdge | One-time license model (often from a few hundred dollars) | Familiar desktop-style model for some legacy users | Less modern cloud ecosystem/flexibility |
| 7 | Epos Now | Varies (often bundled promos/hardware) | SMB-oriented POS with app ecosystem | Total cost depends heavily on package/terms |

**Recommendation order:** Start evaluations with **Shopify POS**, **KORONA**, and **Loyverse** first. They cover the best balance of parity, supportability, and cost.

*Pricing shown is a rough, publicly-available estimate as of this report's writing — actual cost depends on plan tier, hardware, add-ons, and region. Confirm current pricing directly with each vendor before deciding.*

---

## Plan 1 — Stay as-is (do nothing)

**What this means:** Keep current machines and QBPOS 10.0 in production without a migration.

**Pros:**
- No immediate migration spend
- No retraining now

**Risks (high):**
- Growing instability and increasing outages
- Single-day catastrophe risk (license/DB/hardware failure)
- Hardware failure replacement difficulty
- No modern support/security posture

**If forced to choose this temporarily (bridge only):**
1. Create verified daily backups (onsite + offsite).
2. Keep spare clone hardware ready.
3. Document “day-zero recovery” runbook.
4. Time-box this plan (e.g., max 60–90 days) while executing Plan 2 or 3.

---

## Plan 2 — Migrate QBPOS 10.0 to newer Windows machines (if possible)

**Feasibility:** **Conditional**. It may work, but success depends on installer media, license/activation behavior, data integrity, and peripheral driver compatibility.

**Key risks:**
- Installer media may be missing or incomplete
- Activation/registration may block or be inconsistent
- Peripheral devices (receipt printers/scanners) may fail on modern OS/drivers
- Data migration/restore issues may appear late

**Suggested migration plan:**
1. **Inventory current system**: version/build, license info, peripherals, integrations, DB size.
2. **Collect artifacts**: installer media, serial/license records, backup sets.
3. **Build test machine**: new PC isolated as pilot.
4. **Attempt clean install** using recovered media.
5. **Restore copy of production data** (not live DB).
6. **Functional test script**: sales, returns, inventory receive/adjust, reports, end-of-day.
7. **Peripheral test**: scanner, receipt printer, cash drawer, label printer.
8. **Parallel run** for at least 1–2 weeks.
9. **Cutover plan**: freeze window, final backup, go-live checklist, rollback criteria.

**Decision gate:** If install/activation/peripherals fail in pilot, stop investing and move to Plan 3.

---

## Plan 3 — Replace QBPOS 10.0

### 3A) Off-the-shelf software (recommended default)
Use a modern supported POS with closest practical parity. Prioritize:
1. **Shopify POS**
2. **KORONA**
3. **Loyverse**

**Approach:**
- Run feature-fit workshop (must-have vs nice-to-have)
- Pilot top 2 systems in sandbox
- Cost model (12/24/36 months)
- Parallel run and phased cutover

### 3B) Custom app with parity + improvements
**When this makes sense:**
- Client has unique workflows no vendor handles well
- They accept build + maintenance ownership

**Reality check:**
- Full POS parity is expensive/time-consuming
- Best path is often a **targeted custom app** for only critical workflows, not a full reinvention day one

**Pragmatic custom strategy:**
- Phase 1: core operations only (sales, items, customers, inventory, reporting)
- Phase 2: advanced needs (purchasing, analytics, integrations)
- Keep integrations modular

---

## Final recommendation

**Best path:** Execute **Plan 3A (off-the-shelf migration)** now, with **Plan 2 pilot** only as a short-term hedge if operations need immediate continuity.

- Do **not** choose Plan 1 as a long-term strategy.
- Use the next 2–4 weeks to pilot **Shopify POS** and **KORONA**, with **Loyverse** as the low-cost benchmark.
- Keep a strict cutoff date for legacy QBPOS use to avoid catastrophic unplanned downtime.

---

## Next Steps

1. Set a decision deadline for Plan 1 vs. 2 vs. 3 — recommend within 2 weeks of this report.
2. Begin Shopify POS / KORONA / Loyverse pilots in parallel with any Plan 2 hardware test.
3. Reconvene at the end of the pilot window to confirm go-live plan and cutover date.

Questions on any section above — reach out anytime before the next check-in.
